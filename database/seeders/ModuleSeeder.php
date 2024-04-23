<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;
use DB;

class ModuleSeeder extends Seeder
{

    public function run() {

        DB::table('modules')->delete();

        $modules = [
            ['identifiers' => 'dashboard', 'name' => 'Dashboard'],
            ['identifiers' => 'banners', 'name' => 'Banners'],
            ['identifiers' => 'about_us', 'name' => 'About Us'],
            ['identifiers' => 'short_lists', 'name' => 'Our Services'],
            ['identifiers' => 'article_categories', 'name' => 'Article Categories'],
            ['identifiers' => 'article', 'name' => 'Article'],
            ['identifiers' => 'pages', 'name' => 'Pages'],
            ['identifiers' => 'job_titles', 'name' => 'Job Titles'],
            ['identifiers' => 'careers_visitors', 'name' => 'Applicant'],
            ['identifiers' => 'visitors', 'name' => 'Contact Form Data'],
            ['identifiers' => 'menu_managements', 'name' => 'Menu Managements'],
            ['identifiers' => 'user_groups', 'name' => 'User Groups'],
            ['identifiers' => 'users', 'name' => 'Users'],
            ['identifiers' => 'settings', 'name' => 'Settings'],
            ['identifiers' => 'permissions', 'name' => 'Permissions'],
        ];

        $id = 1;

        foreach ($modules as $module) {
            Module::create([
                'id' => $id,
                'identifiers' => $module['identifiers'],
                'name' => $module['name']
            ]);
            $id++;
        }

    }
}
