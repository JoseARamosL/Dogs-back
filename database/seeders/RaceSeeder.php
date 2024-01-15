<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('race')->insert([
            'race' => 'Border Collie',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('race')->insert([
            'race' => 'Pastor Alemán',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('race')->insert([
            'race' => 'Bull Terrier',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('race')->insert([
            'race' => 'Pitbull',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('race')->insert([
            'race' => 'Yorkshire',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
