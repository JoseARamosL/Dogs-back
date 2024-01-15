<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hair')->insert([
            'hair' => 'Corto Blanco',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hair')->insert([
            'hair' => 'Mediano Blanco',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hair')->insert([
            'hair' => 'Largo Blanco',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hair')->insert([
            'hair' => 'Corto Negro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hair')->insert([
            'hair' => 'Mediano Negro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hair')->insert([
            'hair' => 'Largo Negro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hair')->insert([
            'hair' => 'Corto MArrón',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hair')->insert([
            'hair' => 'Mediano Marrón',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('hair')->insert([
            'hair' => 'Largo Marrón',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
