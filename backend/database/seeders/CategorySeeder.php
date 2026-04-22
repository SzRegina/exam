<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kategorias')->insert([
            [
                'id' => 1,
                'name' => 'Házimunka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Iskolai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Egyéb',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}