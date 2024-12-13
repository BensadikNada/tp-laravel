<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    protected $table='participation';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable=['films_id', 'acteur_id', 'role', 'typeRole'];
    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function acteur()
    {
        return $this->belongsTo(Acteur::class);
    }
}
