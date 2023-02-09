<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome(){
        $items = Item::paginate(8);
        return view('home',[
            'items' => $items
        ]);
    }
}
