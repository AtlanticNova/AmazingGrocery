<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function detailsItem($id){
        $item = Item::find($id);
        return view('details',[
            'item' => $item
        ]);
    }
}
