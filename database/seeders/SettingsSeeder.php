<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'name' => 'site_name',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'default_language',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'email',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'address',
                'value' => '{"kecamatan":null,"kota":null,"provinsi":null,"detail":null}',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'phone',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'whatsapp',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'email_receive',
                'value' => '[]',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'social_media',
                'value' => '[]',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'logo_navbar',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'logo_footer',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'logo',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'favicon',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'min_purchase',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'internal_courier_price',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'overview',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'services_overview',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'services_link',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'services_background',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'factory_overview',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'factory_title',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'factory_link',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'factory_image',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'office_hours',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'overview_an',
                'value' => '',
                'created_at' => date('Y-m-d H:i:s')
            ],
            // [
            //      'name' => 'same_as_default',
            //     'value' => '',
            //     'created_at' => date('Y-m-d H:i:s')
            // ],
        ];
        foreach ($settings as $key => $val) {
            Setting::create($val);
        }
    }
}
