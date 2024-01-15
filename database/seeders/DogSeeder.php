<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dog')->insert([
            'name' => 'Simba',
            'description' => 'Demasiado cansado',
            'race_id' => 1,
            'size_id' => 1,
            'hair_id' => 1,
            'country_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('dog')->insert([
            'name' => 'Roco',
            'description' => 'Vacuna a los 4 años',
            'race_id' => 2,
            'size_id' => 2,
            'hair_id' => 4,
            'country_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
