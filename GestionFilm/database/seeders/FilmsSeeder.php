<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('films')->insert([
            'titre' => 'Film 1',
            'pays' => 'Country 1',
            'année' => '2023',
            'durée' => '01:30:00',
            'genre' => 'Genre 1',
        ]);
    }
}
