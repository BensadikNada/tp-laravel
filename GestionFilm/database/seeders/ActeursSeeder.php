<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('acteurs')->insert([
            'nom' => 'Doe',
            'prenom' => 'John',
            'pays' => 'France',
            'date_naissance' => '1990-05-15',
            'tel' => '0660305303',
        ]);
    }
}
