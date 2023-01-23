<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'age',
        'phone',
        'photo',
        'team_id',
        'role_id',
        'is_verified',
        'verified_at'
    ];

    // Relation to Table teams
    public function team(){
        return $this->belongsTo(Team::class);
    }

    // Relation to Table teams
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
