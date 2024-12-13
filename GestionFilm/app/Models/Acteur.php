<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    protected $table='acteurs';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable=['nom', 'prenom', 'pays', 'date_naissance', 'tel'];
    public function participation(){
        return $this->hasMany(Participation::class, 'acteur_id');
    } 
}
