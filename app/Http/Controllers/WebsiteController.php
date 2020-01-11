<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roll;

class WebsiteController extends Controller
{
  public function index()
  {
      return view('welcome',['rolls' => Roll::all()]);
  }
}
