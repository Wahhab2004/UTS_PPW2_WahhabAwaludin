<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pemain;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
            Pemain::create([
                'nama' => fake()->name(),
                'posisi' => fake()->sentence(1),
                'no_punggung' => fake()->numberBetween(1, 100),
            ]);
        }
    }
}
