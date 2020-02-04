<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Cart;

class CartsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $carts = Cart::all();
        //dd($carts->products[0]->pivot->product_qty);
        //dd($carts->products[0]->carts);
        // mandar a la vista el listado de menues
        // Agregar el modelo de Menu
        // Llamar al metodo Menu::all
        return view('customers.cart.index', ['carts' => $carts]);
    }
    
}
