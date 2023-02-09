<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'item_name',
        'item_desc',
        'price'
    ];

    public function orders(){
        return $this->belongsTo(Order::class, 'orders');
    }
}
