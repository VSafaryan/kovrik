<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SampleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([

            [
                'image' => 'https://savorauto.ru/wp-content/uploads/2019/02/kovrik-luxe-bordovyi-1024x682.jpg',
                'type' => 'carpet',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'https://savorauto.ru/wp-content/uploads/2019/02/kovrik-luxe-korichnevyi-korichnevaya-strochka-1024x682.jpg',
                'type' => 'carpet',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'https://thumb.tildacdn.com/tild3730-3039-4231-b730-373831383337/-/resize/744x/-/format/webp/kovrik_premium_temno.jpg',
                'type' => 'carpet',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'https://автокожа.рус/wp-content/uploads/2019/05/avto-kovrik-3d-.jpg',
                'type' => 'leather',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'https://auto-kovriki.ru/avto/upload/shop_1/2/3/8/item_2384/shop_items_catalog_image1223.jpg',
                'type' => 'leather',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'https://stylegarage.ru/images/3d-kovriki-iz-ekokozhi-stylegarage-8.jpg',
                'type' => 'leather',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'https://автокожа.рус/wp-content/uploads/2019/05/avto-kovrik-3d-.jpg',
                'type' => 'velours',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'https://savorauto.ru/wp-content/uploads/2019/02/kovrik-luxe-korichnevyi-korichnevaya-strochka-1024x682.jpg',
                'type' => 'velours',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'https://savorauto.ru/wp-content/uploads/2019/02/kovrik-luxe-bordovyi-1024x682.jpg',
                'type' => 'velours',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}
