<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ReflectionFunctionAbstract;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name',
        'logo',
        'user_id'
    ];

    // Relation to Model User
    public function users(){
        return $this->belongsToMany(User::class);
    }

    // Relation to Model Team
    public function teams(){
        return $this->hasMany(Team::class);
    }
    
    // Relation to Model Role
    public function roles(){
        return $this->hasMany(Role::class);
    }
}
