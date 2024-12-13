<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table='films';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable=['titre', 'pays', 'année', 'durée', 'genre'];
    public function participation(){
        return $this->hasMany(Participation::class, 'film_id');
    } 
}
