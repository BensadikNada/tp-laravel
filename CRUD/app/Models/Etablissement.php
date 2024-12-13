<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $table='etablissements';
    protected $fillable = [
        'users_id',
        'regions_id',
        'nom_efp',
        'adresse',
        'tel',
        'ville',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function region()
    {
        // return $this->belongsTo(Region::class, 'regions_id');
    }
}
