<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $f=Factory::create();
        for($i=0; $i<=80; $i++){
            Categorie::create([
                'nom'=>$f->word(),
                'description'=>$f->sentence(),
            ]);
        }
    }
}
