<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'role_name'
    ];

    public function accounts(){
        return $this->belongsTo(Account::class, 'accounts');
    }

    public function genders(){
        return $this->belongsTo(Gender::class, 'genders');
    }
}
