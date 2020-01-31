<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class WebsiteController extends Controller
{
  public function index()
  {
      return view('welcome',['rolls' => Role::all()]);
  }
}
