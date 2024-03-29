<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Responsibility extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'role_id'
    ];

    // Relation to table Roles
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
