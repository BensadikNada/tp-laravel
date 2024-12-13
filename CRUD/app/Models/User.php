<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table='users';
    protected $fillable = [
        'roles_id',
        'email',
        'password',
        'remember_token',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class, 'roles_id');
    }
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
    public function entreprises()
    {
        return $this->hasMany(Entreprise::class, 'users_id');
    }
    
    public function roles()
    {
        return $this->morphToMany(Role::class, 'model', 'role_model', 'model_id', 'role_id');
    }

}
