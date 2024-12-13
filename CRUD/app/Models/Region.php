<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table='regions';
    protected $fillable = ['user_id', 'nom_region'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
