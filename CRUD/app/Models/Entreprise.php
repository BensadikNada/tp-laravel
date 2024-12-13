<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $table = 'entreprises';

    protected $fillable = [
        'raison',
        'email',
        'site',
        'logo',
        'status',
        'representant',
        'telephone1',
        'telephone2',
        'telephone3',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
