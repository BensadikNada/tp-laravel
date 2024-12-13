<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $table='stagiaires';
    protected $primaryKey='id';
    protected $fillable=['nom', 'prenom', 'tel','date_naissance', 'office', 'filiere', 'image'];
    // public $timestamps=false;
}
