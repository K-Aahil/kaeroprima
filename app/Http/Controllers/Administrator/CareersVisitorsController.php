<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\CareerVisitor;
use DataTables;
use Storage;
use Image;
use File;
use DB;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class CareersVisitorsController extends Controller
{
    private static $module = "careers_visitors";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }

        $career_visitor = CareerVisitor::all();

        return view("administrator.career_visitors.index", compact('career_visitor'));
    }

    public function getData(Request $request)
    {
        $data = CareerVisitor::select(DB::raw('careers_visitors.*,DATE_FORMAT(careers_visitors.created_at, "%d-%c-%Y")as tanggal, job_titles.name as position'))
        ->leftJoin(DB::raw('job_titles'), 'job_titles.id', '=', 'careers_visitors.position_id')
        ->get();
        // dd($data);
        
        return DataTables::of($data)
            ->addColumn('action', function ($row) {
                $btn = "";
                if (isAllowed(static::$module, "download"))//Check permission 
                {
                    $fileUrl = asset_storage('app/careers/' . htmlspecialchars($row->file));
                    $btn .= '<a href="' . $fileUrl . '" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2" download>
                                <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z" fill="#888"/>
                                </svg>
                                </span>
                            </a>';
                }
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
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }

        $id = $request->ix;
        $careerVisitor = CareerVisitor::find($id);

        if(file_exists('./storage_kaero/app/careers/'.$careerVisitor->file) && $careerVisitor->file != null){
            $file_old = './storage_kaero/app/careers/'.$careerVisitor->file;
            unlink($file_old);
        }

        $data = $careerVisitor->delete();

        // Tulis log
        createLog(static::$module, __FUNCTION__, $id);

        return response()->json($data);
    }



    public function exportExcel(Request $request)
    {
        if (!isAllowed(static::$module, "export")) {
            abort(403);
        }

        $whereTanggal = [];
        $wherePosition = [];
        $whereName = [];
        $whereEmail = [];
        $wherePhone = [];

        if($request->search != null){
            $search = explode("|", $request->search);
            foreach ($search as $value){
                $nilai = explode(":", $value);
                
                if($nilai[0] == "txt" && $nilai[1] != ""){
                    $whereTanggal[] = [DB::raw("LOWER(DATE_FORMAT(careers_visitors.created_at, '%d-%c-%Y'))"), "LIKE", '%' .$nilai[1].'%'];
                    $wherePosition[] = [DB::raw("LOWER(job_titles.name)"), "LIKE", '%' .$nilai[1].'%'];
                    $whereName[] = [DB::raw("LOWER(careers_visitors.name)"), "LIKE", '%' .$nilai[1].'%'];
                    $whereEmail[] = [DB::raw("LOWER(careers_visitors.email)"), "LIKE", '%' .$nilai[1].'%'];
                    $wherePhone[] = [DB::raw("LOWER(careers_visitors.phone)"), "LIKE", '%' .$nilai[1].'%'];
                }
            }
        }

        
        $query = CareerVisitor::select(DB::raw('careers_visitors.*,DATE_FORMAT(careers_visitors.created_at, "%d-%c-%Y")as tanggal, job_titles.name as position'))
            ->leftJoin(DB::raw('job_titles'), 'job_titles.id', '=', 'careers_visitors.position_id')
            ->Where($whereTanggal)
            ->orWhere($wherePosition)
            ->orWhere($whereName)
            ->orWhere($whereEmail)
            ->orWhere($wherePhone);

        $careers_visitors = $query->get();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $textCenter = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];

        $sheet->mergeCells('A1:F1')->getStyle('A1:F1')->getFont()->setBold(true)->setSize(16);
        $sheet->setCellValue('A1', 'Careers Kaero Prima');
        $sheet->setCellValue('A2', 'No')->getStyle('A2')->getFont()->setBold(true);
        $sheet->setCellValue('B2', 'Apply Date')->getStyle('B2')->getFont()->setBold(true);
        $sheet->setCellValue('C2', 'Position')->getStyle('C2')->getFont()->setBold(true);
        $sheet->setCellValue('D2', 'Name')->getStyle('D2')->getFont()->setBold(true);
        $sheet->setCellValue('E2', 'Email')->getStyle('E2')->getFont()->setBold(true);
        $sheet->setCellValue('F2', 'Phone')->getStyle('F2')->getFont()->setBold(true);
        $rows = 3;
        $no = 1;

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
        
        $sheet->getStyle('A2:F'.(count($careers_visitors)+2))->applyFromArray($styleArray);
        $sheet->getStyle('A3:A'.(count($careers_visitors)+2))->applyFromArray($textCenter);
        $sheet->getStyle('B3:F'.(count($careers_visitors)+2))->applyFromArray($textTopLeft);
        $sheet->getStyle('B2')->applyFromArray($textCenter);
        $sheet->getStyle('C2')->applyFromArray($textCenter);
        $sheet->getStyle('D2')->applyFromArray($textCenter);
        $sheet->getStyle('E2')->applyFromArray($textCenter);
        $sheet->getStyle('F2')->applyFromArray($textCenter);
        
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(30);
        $sheet->getColumnDimension('C')->setWidth(30);
        $sheet->getColumnDimension('D')->setWidth(30);
        $sheet->getColumnDimension('E')->setWidth(30);
        $sheet->getColumnDimension('F')->setWidth(30);

        foreach ($careers_visitors as $key){
            $sheet->setCellValue('A' . $rows, $no)->getStyle('A')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('B' . $rows, date('d F Y', strtotime($key['created_at'])))->getStyle('B')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('C' . $rows, $key['position'])->getStyle('E')->getAlignment()->setWrapText(true);
            $sheet->setCellValue('D' . $rows, $key['name']);
            $sheet->setCellValue('E' . $rows, $key['email']);
            $sheet->setCellValue('F' . $rows, $key['phone']);
            $rows++;
            $no++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Applicant Kaero Prima.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
