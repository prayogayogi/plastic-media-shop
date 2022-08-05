<?php

namespace Database\Seeders;

use App\Models\GalleriProduct;
use Illuminate\Database\Seeder;

class GalleriProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GalleriProduct::factory(10)->create();
    }
}
