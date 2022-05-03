<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PirceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([

            [
                'carpet' => 230,
                'leather' => 360,
                'velours' => 330,
                'logo' => 20,
                'color' => 64,
                'seamcolor' => 28,
                'sewingcolor' => 12,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'carpet' => 70,
                'leather' => 120,
                'velours' => 100,
                'logo' => 20,
                'color' => 64,
                'seamcolor' => 28,
                'sewingcolor' => 12,
                'status' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
