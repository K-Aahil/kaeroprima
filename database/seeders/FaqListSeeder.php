<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqList;

class FaqListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq_list = [
            [
                'name' => 'Faq',
                'slug' => 'faq',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];
        foreach ($faq_list as $key => $val) {
            FaqList::create($val);
        }
    }
}
