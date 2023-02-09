<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'accounts_id',
        'items_id',
        'price'
    ];

    public function accounts(){
        return $this->belongsTo(Account::class, 'accounts');
    }

    public function items(){
        return $this->belongsToMany(Item::class, 'items');
    }
}
