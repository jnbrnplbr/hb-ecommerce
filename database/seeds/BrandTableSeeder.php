<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['name' => 'Rolex']);
        Brand::create(['name' => 'Swatch']);
        Brand::create(['name' => 'G-Shock']);
        Brand::create(['name' => 'Lange & Söhne']);
        Brand::create(['name' => 'Cartier']);
        Brand::create(['name' => 'Piaget']);
        Brand::create(['name' => 'Parmigiani Fleurier']);
        Brand::create(['name' => 'Longines']);
        Brand::create(['name' => 'Ulysse Nardin']);
        Brand::create(['name' => 'Baume & Mercier']);
    }
}
