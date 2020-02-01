<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class HomeController extends Controller
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
 $menues = Menu::all();

      // mandar a la vista el listado de menues
      // Agregar el modelo de Menu
      // Llamar al metodo Menu::all
        return view('home', ['menues'=>$menues]);
    }
    public function faqs()
    {
        return view('faqs');
    }
    public function contactanos()
    {
        return view('contactanos');
    }
    public function nosotros()
    {
        return view('nosotros');
    }
}
