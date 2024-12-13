<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "idCategorie";
    protected $fillable = ["nom", "description"];

    protected function categorie()
    {
        return $this->hasMany(Produit::class);
    }
}
