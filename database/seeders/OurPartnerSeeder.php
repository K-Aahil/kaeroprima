<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OurPartner;

class OurPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $our_partner = [
            [
                'name' => 'Partner',
                'slug' => 'partner',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Otorisasi',
                'slug' => 'otorisasi',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];
        foreach ($our_partner as $key => $val) {
            OurPartner::create($val);
        }
    }
}
