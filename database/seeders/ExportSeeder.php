<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;
use App\Models\ProductInquiries;

class ExportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $visitor = [
        //     [
        //         'name' => 'sunarya',
        //         'email' => 'adi.sunandar2022@gmail.com',
        //         'subject' => 'kredit pembelian rumah',
        //         'description' => 'bunga terlalu tinggi',
        //         'created_at' => date('Y-m-d H:i:s')
        //     ],
        //     [
        //         'name' => 'sunandar',
        //         'email' => 'adi.sunandar1995@gmail.com',
        //         'subject' => 'deposito',
        //         'description' => 'bunga terlalu rendah',
        //         'created_at' => date('Y-m-d H:i:s')
        //     ],
        // ];
        // foreach ($visitor as $key => $val) {
        //     Visitor::create($val);
        // }

        $product_inquiries = [
            [
                'name' => 'sari damayanti',
                'email' => 'sari.damayanti2022@gmail.com',
                'phone' => '089765752222',
                'product_id' => 3,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'ryu akira',
                'email' => 'ryu.akira20@gmail.com',
                'phone' => '089765753333',
                'product_id' => 4,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];
        foreach ($product_inquiries as $key => $val) {
            ProductInquiries::create($val);
        }
    
    }
}
