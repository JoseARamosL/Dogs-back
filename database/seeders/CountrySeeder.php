<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('country')->insert([
            'country' => 'España',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('country')->insert([
            'country' => 'Francia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('country')->insert([
            'country' => 'Italia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('country')->insert([
            'country' => 'Aleania',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('country')->insert([
            'country' => 'China',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
