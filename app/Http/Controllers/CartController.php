<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart($id)
    {
        $car = Car::find($id);
        Cart::create([
            'service_id'=>$id,
            'user_id'=>Auth::user()->id,
            'location'=>'Dhaka',
            'cart_model'=>'None',
            'number'=>'017'
        ]);
        return redirect('/');
    }
    public function Cartview()
    {
        if(Auth::user()->role=='user')
        {
            $data = Cart::where('user_id',Auth::user()->id)->get();
            return view('cart.view',compact('data'));
        }
        else
        {
            $data = Cart::all();
            return view('cart.view',compact('data'));
        }
    }
}
