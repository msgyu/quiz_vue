<?php

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
                    'name' => 'ビジネスマナー',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '一般常識',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '就職・転職',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '法律',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'IT',
                    'created_at' => now(),
                    'updated_at' => now(),
                ], [
                    'name' => '雑学',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
