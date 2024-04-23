<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(UserSeeder::class);
        // $this->call(BrandSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(CustomerGroupSeeder::class);
        // $this->call(CustomerSeeder::class);
        // $this->call(OrdersSeeder::class);
        // $this->call(CourierSeeder::class);
        // $this->call(LocationSeeder::class);
        // $this->call(ModuleSeeder::class);
        // $this->call(PermissionsSeeder::class);
        // $this->call(SettingsSeeder::class);
        // $this->call(DirectorListSeeder::class);
        // $this->call(FaqListSeeder::class);
        // $this->call(OurPartnerSeeder::class);
        // $this->call(PageBannersSeeder::class);
        // $this->call(ExportSeeder::class);

        //JANGAN DI NYALAKAN
        // $this->call(DeleteOrderSeeder::class);
        // $this->call(KecamatanSeeder::class);
    }
}
