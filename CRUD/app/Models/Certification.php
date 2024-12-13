<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $table = 'certifications';

    protected $fillable = [
        'domaines_id',
        'intervenants_id',
        'intiltule_certification',
        'organisme_certification',
        'type_certification',
    ];

    public function domaine()
    {
        return $this->belongsTo(Domaine::class, 'domaines_id');
    }

    public function intervenant()
    {
        return $this->belongsTo(Intervenant::class, 'intervenants_id');
    }
}
