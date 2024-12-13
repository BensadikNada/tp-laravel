<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table="produits";
    protected $primaryKey="idProduit";
    protected $fillable=["nom","prix","qteStock","idCategorie"];

    protected function categorie()
    {
        return $this->belongsTo(Categorie::class,'idCategorie');
    }
}
