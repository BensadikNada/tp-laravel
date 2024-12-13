<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipationsSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('participations')->insert([
            'film_id' => 1,
            'acteur_id' => 1,
            'role' => 'Lead',
            'typeRole' => 'principal',
        ]);
    }
}
