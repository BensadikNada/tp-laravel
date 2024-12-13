<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $table='annonces';
    protected $primarykey='id';
    protected $fillable=['titre', 'description', 'type', 'ville', 'superficie', 'neuf', 'prix'];
    public $timestamps=false;
}
