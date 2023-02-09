<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function viewCart(){
        $order = Order::join('items', 'items.id', '=', 'orders.items_id')
                ->where('orders.accounts_id', Auth::user()->id)
                ->get(['items.item_name', 'orders.*']);
        $sum = $order->sum('price');
        return view('cart',[
            'items' => $order,
            'sum' => $sum
        ]);
    }

    public function add($id){
        $findItem= Item::find($id);

        if ($findItem) {
            $check = Order::where('items_id', $id)->where('accounts_id', Auth::user()->id)->first();

            if ($check) {
                return back();
            }

            Order::create([
                'accounts_id'=> Auth::user()->id,
                'items_id'=> $id,
                'price'=> $findItem->price
            ]);

            return back()->with('session', [
                'color'   => 'success',
                'message' => 'New item added to your cart'
            ]);
        }
        return redirect()->back();
    }

    public function remove($id){
        Order::destroy($id);
        return redirect()->back()->with('session', [
            'color'   => 'success',
            'message' => "item has been deleted"
        ]);
    }
}
