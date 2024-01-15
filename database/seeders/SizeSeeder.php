<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('size')->insert([
            'size' => 'Enano',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('size')->insert([
            'size' => 'Pequeño',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('size')->insert([
            'size' => 'Mediano',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('size')->insert([
            'size' => 'Grande',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('size')->insert([
            'size' => 'Enorme',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
