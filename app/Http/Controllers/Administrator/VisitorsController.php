<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\Visitor;
use DataTables;
use Image;
use File;
use DB;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class VisitorsController extends Controller
{
    private static $module = "visitors";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }

        $visitor = Visitor::all();

        return view("administrator.visitors.index", compact('visitor'));
    }

    public function getData(Request $request)
    {
        $data = Visitor::select(DB::raw('visitors.*,DATE_FORMAT(created_at, "%d-%c-%Y")as tanggal'))->get();
        
        return DataTables::of($data)
            ->addColumn('action', function ($row) {
                $btn = "";
                // if(isAllowed(static::$module, "detail"))://Check permission
                // $btn .= '<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 btn-detail" data-name="'.($row->name).'" data-email="'.($row->email).'" data-subject="'.($row->subject).'" data-description="'.($row->description).'"data-tanggal="'.($row->tanggal).'">
                // <span class="svg-icon svg-icon-3">
                // <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/><path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/></svg>
                // </span>
                // </a>';
                // endif;
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

        $data = Visitor::destroy($request->ix);
        //Write log
        createLog(static::$module, __FUNCTION__, $request->ix);
        return response()->json($data);
    }

    public function exportExcel(Request $request)
    {
        if (!isAllowed(static::$module, "export")) {
            abort(403);
        }

        $params = [];
        $whereTanggal = [];
        $whereEmail = [];
        $whereDescription= [];

        if($request->search != null){
            $search = explode("|", $request->search);
            foreach ($search as $value){
                $nilai = explode(":", $value);
                
                if($nilai[0] == "txt" && $nilai[1] != ""){
                    $whereTanggal[] = [DB::raw("LOWER(DATE_FORMAT(visitors.created_at, '%d-%c-%Y'))"), "LIKE", '%' .$nilai[1].'%'];
                    $whereEmail[] = [DB::raw("LOWER(visitors.email)"), "LIKE", '%' .$nilai[1].'%'];
                    $whereDescription[] = [DB::raw("LOWER(visitors.description)"), "LIKE", '%' .$nilai[1].'%'];
                }
            }
        }

        
        $query = Visitor::select(DB::raw('visitors.*,DATE_FORMAT(created_at, "%d-%c-%Y")as tanggal'))
            // ->where($params)
            ->Where($whereTanggal)
            ->orWhere($whereEmail)
            ->orWhere($whereDescription);

        $visitors = $query->get();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $textCenter = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];

        $sheet->mergeCells('A1:D1')->getStyle('A1:D1')->getFont()->setBold(true)->setSize(16);
        $sheet->setCellValue('A1', 'Contact Kaero Prima');
        $sheet->setCellValue('A2', 'No')->getStyle('A2')->getFont()->setBold(true);
        $sheet->setCellValue('B2', 'Created Message')->getStyle('B2')->getFont()->setBold(true);
        // $sheet->setCellValue('C2', 'Name')->getStyle('C2')->getFont()->setBold(true);
        $sheet->setCellValue('C2', 'Email')->getStyle('C2')->getFont()->setBold(true);
        // $sheet->setCellValue('E2', 'Subject')->getStyle('E2')->getFont()->setBold(true);
        $sheet->setCellValue('D2', 'Message')->getStyle('D2')->getFont()->setBold(true);
        $rows = 3;
        $no = 1;

        // $params = [];
        // $data = Visitor::select(DB::raw('visitors.*,DATE_FORMAT(created_at, "%d-%c-%Y")as tanggal'))
        //                 ->where($params)
        //                 ->get();

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];

        $textTopLeft = [
            'alignment' => array(
				'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP, 
				'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT
			),
        ];

        $textCenter = [
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP, 
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];
        
        $sheet->getStyle('A2:D'.(count($visitors)+2))->applyFromArray($styleArray);
        $sheet->getStyle('A3:A'.(count($visitors)+2))->applyFromArray($textCenter);
        $sheet->getStyle('B3:D'.(count($visitors)+2))->applyFromArray($textTopLeft);
        $sheet->getStyle('B2')->applyFromArray($textCenter);
        $sheet->getStyle('C2')->applyFromArray($textCenter);
        $sheet->getStyle('D2')->applyFromArray($textCenter);
        // $sheet->getStyle('E2')->applyFromArray($textCenter);
        // $sheet->getStyle('F2')->applyFromArray($textCenter);
        
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(30);
        $sheet->getColumnDimension('C')->setWidth(40);
        $sheet->getColumnDimension('D')->setWidth(50);
        // $sheet->getColumnDimension('E')->setWidth(40);
        // $sheet->getColumnDimension('F')->setWidth(50);

        foreach ($visitors as $key){
            $sheet->setCellValue('A' . $rows, $no)->getStyle('A')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('B' . $rows, date('d F Y', strtotime($key['created_at'])))->getStyle('B')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            // $sheet->setCellValue('C' . $rows, $key['name']);
            $sheet->setCellValue('C' . $rows, $key['email']);
            // $sheet->setCellValue('E' . $rows, $key['subject'])->getStyle('E')->getAlignment()->setWrapText(true);
            $sheet->setCellValue('D' . $rows, $key['description']);
            $rows++;
            $no++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Contact Kaero Prima.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
