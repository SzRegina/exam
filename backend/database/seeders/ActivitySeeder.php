<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        Activity::factory()->create([
            'category_id' => 1,
            'name' => 'Mosogatás',
            'status' => false,
        ]);

        Activity::factory()->create([
            'category_id' => 1,
            'name' => 'Porszívózás',
            'status' => true,
        ]);

        Activity::factory()->create([
            'category_id' => 2,
            'name' => 'Matek házi',
            'status' => false,
        ]);

        Activity::factory()->create([
            'category_id' => 2,
            'name' => 'Angol tanulás',
            'status' => true,
        ]);

        Activity::factory()->create([
            'category_id' => 3,
            'name' => 'Bevásárlás',
            'status' => false,
        ]);

        Activity::factory()->create([
            'category_id' => 3,
            'name' => 'Szoba rendbetétele',
            'status' => true,
        ]);
    }
}