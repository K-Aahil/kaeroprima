<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShortList;

class ShortListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $short_list = [
            [
                'name' => 'Achivement',
                'slug' => 'achivement',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Corporate Values',
                'slug' => 'corporate-values',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nasabah',
                'slug' => 'nasabah',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];
        foreach ($short_list as $key => $val) {
            ShortList::create($val);
        }
    }
}
