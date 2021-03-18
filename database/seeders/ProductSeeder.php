<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' =>'Redmi',
                'price' =>'500',
                'description' =>'A smartphone with 6gb ram and much more feature',
                'category' => 'mobile',
                "gallery" => 'https://images.frandroid.com/wp-content/uploads/2019/04/xiaomi-redmi-7-2019-china-frandroid.png'
            ],

            [
                'name' =>'TV samsung',
                'price' =>'500',
                'description' =>'43“ N5000 Series 5 Flat Full HD TV | Samsung A',
                'category' => 'TV',
                "gallery" => 'https://images.samsung.com/is/image/samsung/africa-fr-n5000-series-ua43n5000auxke-frontblack-227264789?$720_576_PNG$'
            ],

            [
                'name' =>'TCL',
                'price' =>'1000',
                'description' =>'Electronique et Téléviseur 4k',
                'category' => 'TV',
                "gallery" => 'https://www.lcd-compare.com/images/main/standard_v4/home/cat4-0.png'
            ],
            [
                'name' =>'Keyboard',
                'price' =>'200',
                'description' =>'Keyz RUBIDIUM-E - Mecanique/RGB',
                'category' => 'keyboard',
                "gallery" => 'https://www.cybertek.fr/images_produits/583f1a0d-470c-4182-81fa-3ffbfd3f602e.jpg'
            ],
            
        ]);
    }
}
