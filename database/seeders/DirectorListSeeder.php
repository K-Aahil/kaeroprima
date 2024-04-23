<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DirectorList;

class DirectorListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $director_list = [
            [
                'name' => 'Commissioners And Directors',
                'slug' => 'commissioners-and-directors',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];
        foreach ($director_list as $key => $val) {
            DirectorList::create($val);
        }
    }
}
