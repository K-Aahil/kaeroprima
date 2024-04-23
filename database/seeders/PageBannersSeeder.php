<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageBanners;

class PageBannersSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page_banners = [
            [
                'page' => 'about-us',
                'title' => '-',
                'description' => '-',
                'slug' => 'about-us',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'page' => 'services',
                'title' => '-',
                'description' => '-',
                'slug' => 'services',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'page' => 'partners',
                'title' => '-',
                'description' => '-',
                'slug' => 'partners',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];
        foreach ($page_banners as $key => $val) {
            PageBanners::create($val);
        }
    }
}
