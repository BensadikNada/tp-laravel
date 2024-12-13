<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $table="stagiaire";
    protected $primaryKey="id";
    protected $fillable = ['nom', 'prenom', 'date_naissance', 'adresse'];
}
