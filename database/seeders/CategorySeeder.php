<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Makanan',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Elektronik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Mainan',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Fashion',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Handphone',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Dekorasi Rumah',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
