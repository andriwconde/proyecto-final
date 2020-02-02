<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Menu;

class MenuController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
      $menus = Menu::all();
      return view('website.menus.index',
      [
          'menus' => $menus,
      ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('admin.menus.create',
      [
          'menu' => new Menu,


      ]);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $rq)
  {

    $menu = new Menu;
    $menu->name = $rq['name'];

      $menu->save();

    return redirect('/home');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Menu  $menu
   * @return \Illuminate\Http\Response
   */
  public function show(Menu $id)
  {

    return view('website.menu.show',[
          'menu' => Menu::findOrFail($id)->first()
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\menu  $menu
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $menu = Menu::findOrFail($id);

      return view('admin.Menu.edit',
      [
          'menu' => $menu,
          'menus'=> Menu::all(),
      ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\menu  $menu
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $menu = Menu::find($id);
      $menu->update($request->all());
      return redirect('/home');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\menu  $menu
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $menu = Menu::findOrFail($id);
      $menu->delete();
      return redirect('/home');
  }

  public function reporting()
  {
    return view('admin.reporting.index');
  }
}
