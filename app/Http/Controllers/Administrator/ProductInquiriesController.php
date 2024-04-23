<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductInquiries;
use DataTables;
use Image;
use File;
use DB;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ProductInquiriesController extends Controller
{
    private static $module = "product_inquiries";

    public function index()
    {
        //Check permission
        if (!isAllowed(static::$module, "view")) {
            abort(403);
        }

        $product = ProductInquiries::select(DB::raw('product_inquiries.*,product.name AS product_name'))
        ->leftJoin(DB::raw('product'), 'product.id', '=', 'product_inquiries.product_id')
        ->get();

        return view("administrator.product_inquiries.index", compact('product'));
    }

    public function getData(Request $request){
        $query = ProductInquiries::select(DB::raw('product_inquiries.*,product.name AS product_name,product.category AS product_category'))
            ->leftJoin(DB::raw('product'), 'product.id', '=', 'product_inquiries.product_id');

        if($request->category == "all" && $request->product_name ==""){
            $query->get();
        }
        if($request->category == "kredit" && $request->product_name ==""){
            $query->where('product.category', 'kredit');
        }
        if($request->category == "simpanan" && $request->product_name ==""){
            $query->where('product.category', 'simpanan');
        }
        if($request->product_name != ""){
            $product_name = $request->product_name;
            $query->where('product.name',$product_name);
        }

        $data = $query;
        return DataTables::of($data)
        ->filter(function ($query) {
            if(!empty(request('search')['value'])){
                $query
                ->where(DB::raw('LOWER(product_inquiries.name)'), 'like', '%'.request('search')['value'].'%')
                ->orWhere(DB::raw('LOWER(product_inquiries.email)'), 'like', '%'.request('search')['value'].'%')
                ->orWhere(DB::raw('LOWER(product_inquiries.phone)'), 'like', '%'.request('search')['value'].'%');
            }
        })
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
        })->rawColumns([ 'action'])

        ->make(true);
    }


    function getProduct(Request $request){
        $product = Product::select(DB::raw('product.name AS product_name'));
        if($request->id != 'all'){
            $product->where('product.category',$request->id);
        }
        return $product->get();
    }

    public function delete(Request $request)
    {      
        //Check permission
        if (!isAllowed(static::$module, "delete")) {
            abort(403);
        }

        $data = ProductInquiries::destroy($request->ix);
        //Write log
        createLog(static::$module, __FUNCTION__, $request->ix);
        return response()->json($data);
    }

    public function exportExcel(Request $request){
        if (!isAllowed(static::$module, "export")) {
            abort(403);
        }
        $params = [];
        $whereNama = [];
        $whereEmail = [];
        $wherePhone = [];
        $category = $request->category;
        $product_name = $request->product_name;

        if($request->search != null){
            $search = explode("|", $request->search);
            foreach ($search as $value){
                $nilai = explode(":", $value);
                

                if($nilai[0] == "filter_category" && $nilai[1]!=''){

                    if($nilai[1] == 'all'){
                        $category = 'All';
                    }
                    if($nilai[1] == 'kredit' || $nilai[1] == 'simpanan'){
                        $params[] = ['product.category', '=', $nilai[1]];
                        $category = ($nilai[1]);
                    }
                }
                if($nilai[0] == "filter_product" && $nilai[1]!=''){
                        $params[] = ["product.name", "=", $nilai[1]];
                        $product_name = ($nilai[1]);
                }
                if($nilai[0] == "txt" && $nilai[1] != ""){
                    // $params[] = [DB::raw("LOWER(product.category)"), "LIKE", '%' .$nilai[1].'%'];
                    // $params[] = [DB::raw("LOWER(product.name)"), "LIKE", '%' .$nilai[1].'%'];
                    $whereNama[] = [DB::raw("LOWER(product_inquiries.name)"), "LIKE", '%' .$nilai[1].'%'];
                    $whereEmail[] = [DB::raw("LOWER(product_inquiries.email)"), "LIKE", '%' .$nilai[1].'%'];
                    $wherePhone[] = [DB::raw("LOWER(product_inquiries.email)"), "LIKE", '%' .$nilai[1].'%'];
                    $whereSearch = $nilai[1];
                }
            }
        }
        
        $query = ProductInquiries::select(DB::raw('product_inquiries.*,product.name AS product_name,product.category AS product_category'))
            ->leftJoin(DB::raw('product'), 'product.id', '=', 'product_inquiries.product_id')
            ->where($params)
            ->orWhere($whereNama)
            ->orWhere($whereEmail)
            ->orWhere($wherePhone);

        // $query->groupBy('product_id');


        $product_inquiries = $query->get();
        if(empty($whereSearch)){
            $whereSearch = '';
        }

        if(empty($product_name)){
            $product_name = 'All Product';
        }
        
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $spreadsheet->getActiveSheet()->getStyle('G')->getNumberFormat()
        ->setFormatCode('#,##0');

        $textCenter = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];
        
        $textLeft = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
            ],
        ];

        $sheet->mergeCells('A1:G1')->getStyle('A1:G1')->getFont()->setBold(true)->setSize(16);
        $sheet->mergeCells('A1:G1')->getStyle('A1:G1')->applyFromArray($textCenter);
        $sheet->mergeCells('A2:G2')->getStyle('A2:G2')->getFont()->setBold(true)->setSize(12);
        $sheet->mergeCells('A3:G3')->getStyle('A3:G3')->getFont()->setBold(true)->setSize(12);
        $sheet->setCellValue('A1', 'Product Inquiries');
        $sheet->setCellValue('A2', 'Category : '. $category)->getStyle('A2')->applyFromArray($textLeft);
        $sheet->setCellValue('A3', 'Product : ' . $product_name )->getStyle('A3')->applyFromArray($textLeft);
        $sheet->setCellValue('A4', 'No')->getStyle('A4')->getFont()->setBold(true);
        $sheet->setCellValue('B4', 'Date Visit')->getStyle('B4')->getFont()->setBold(true);
        $sheet->setCellValue('C4', 'Name')->getStyle('C4')->getFont()->setBold(true);
        $sheet->setCellValue('D4', 'E-mail')->getStyle('D4')->getFont()->setBold(true);
        $sheet->setCellValue('E4', 'Phone')->getStyle('E4')->getFont()->setBold(true);
        $sheet->setCellValue('F4', 'Category')->getStyle('F4')->getFont()->setBold(true);
        $sheet->setCellValue('G4', 'Product')->getStyle('G4')->getFont()->setBold(true);
        $sheet->setCellValue('G4', 'Product')->getStyle('G4')->applyFromArray($textCenter);
        

        $rows = 5;
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

        $sheet->getStyle('A4:G'.(count($product_inquiries)+4))->applyFromArray($styleArray);
        
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(40);
        $sheet->getColumnDimension('C')->setWidth(40);
        $sheet->getColumnDimension('D')->setWidth(40);
        $sheet->getColumnDimension('E')->setWidth(40);
        $sheet->getColumnDimension('F')->setWidth(40);
        $sheet->getColumnDimension('G')->setWidth(40);

        foreach ($product_inquiries as $data){
            $sheet->setCellValue('A' . $rows, $no)->getStyle('A')->getAlignment();
            $sheet->setCellValue('B' . $rows, date('d F Y', strtotime($data['created_at'])))->getStyle('B')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('C' . $rows, $data['name'])->getStyle('C')->getAlignment();
            $sheet->setCellValue('D' . $rows, $data['email'])->getStyle('D')->getAlignment();
            $sheet->setCellValue('E' . $rows, $data['phone'])->getStyle('E')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->setCellValue('F' . $rows, $data['product_category'])->getStyle('F')->getAlignment();
            $sheet->setCellValue('G' . $rows, $data['product_name'])->getStyle('G');
            $rows++;
            $no++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Product Inquiries BPR Mitra Parahyangan.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }
}
