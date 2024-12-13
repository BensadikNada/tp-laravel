<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervenant extends Model
{
    use HasFactory;
    protected $table='intervenants';
    protected $fillable = [     
        'matricule',
        'nom',
        'datenaissance',
        'intitule_diplome',
        'type_diplome',
        'specialite_diplome',
        'type_intervenant',
        'status',
    ];
    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'etablissements_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class, 'intervenants_id');
    }
}

