<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'roles_id',
        'genders_id',
        'first_name',
        'last_name',
        'email',
        'display_picture_link',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function roles(){
        return $this->belongsTo(Role::class, 'roles');
    }

    public function genders(){
        return $this->belongsTo(Gender::class, 'genders');
    }

    public function orders(){
        return $this->belongsToMany(Order::class, 'orders');
    }
}
