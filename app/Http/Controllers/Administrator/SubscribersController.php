<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\Subscriber;
use DataTables;
use Image;
use File;
use DB;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class SubscribersController extends Controller
{
    private static $module = "subscribers";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }
        return view("administrator.subscribers.index");
    }

    public function getData(Request $request)
    {
        $data = Subscriber::select(DB::raw('subscribers.*,DATE_FORMAT(created_at, "%d-%c-%Y")as tanggal'))->get();
        
        return DataTables::of($data)
            ->addColumn('action', function ($row) {
                $btn = "";
                if(isAllowed(static::$module, "delete"))://Check permission
                $btn .= '<a href="#" data-ix="' . $row->id . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                        </svg>
                    </span>
                </a>';
                endif;
                return $btn;
            })->rawColumns([ 'action'])->make(true);
    }

    public function delete(Request $request)
    {      
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }

        $data = Subscriber::destroy($request->ix);
        //Write log
        createLog(static::$module, __FUNCTION__, $request->ix);
        return response()->json($data);
    }

    public function exportExcel(Request $request)
    {
        if (!isAllowed(static::$module, "export")) {
            abort(403);
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $spreadsheet->getActiveSheet()->getStyle('E')->getNumberFormat()
        ->setFormatCode('#,##0');

        $textCenter = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];

        $sheet->mergeCells('A1:C1')->getStyle('A1:G1')->getFont()->setBold(true)->setSize(16);
        $sheet->setCellValue('A1', 'Subscriber Sinar Gemilang');
        $sheet->setCellValue('A2', 'No')->getStyle('A2')->getFont()->setBold(true);
        $sheet->setCellValue('B2', 'Email')->getStyle('B2')->getFont()->setBold(true);
        $sheet->setCellValue('C2', 'Dibuat Tanggal')->getStyle('G2')->getFont()->setBold(true);
        $rows = 3;
        $no = 1;

        $params = [];
        $data = Subscriber::select(DB::raw('subscribers.*,DATE_FORMAT(created_at, "%d-%c-%Y")as tanggal'))
                        ->where($params)
                        ->get();

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
        
        $sheet->getStyle('A2:C'.(count($data)+2))->applyFromArray($styleArray);
        
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(30);
        $sheet->getColumnDimension('C')->setWidth(20);

        foreach ($data as $key){
            $sheet->setCellValue('A' . $rows, $no)->getStyle('A')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('B' . $rows, $key['email'])->getStyle('C')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('C' . $rows, date('d F Y', strtotime($key['created_at'])))->getStyle('G')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $rows++;
            $no++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Subscriber Sinar Gemilang.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
