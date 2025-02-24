<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = 'formations';

    protected $fillable = [
        'exercice',
        'etablissements_id',
        'themes_id',
        'nbjours',
        'nbparticipantmaxi',
        'cout_previsionnel',
        'status',
    ];

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'etablissements_id');
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'themes_id');
    }
}

