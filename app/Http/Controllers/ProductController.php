<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Menu;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();
        return view('website.products.index',
        [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create',
        [
            'product' => new Product,
            'menues'=> Menu::all(),

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

      $product = new Product;
      $product->name = $rq['name'];
      $product->price = $rq['price'];
      $product->description = $rq['description'];
      $product->menu_id = $rq['menu'];
      if ($rq->hasFile('img')) {
        $product->image = $rq->file('img')->store('public/product');
      }

      $product->save();

      return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id)
    {

      return view('website.products.show',[
            'product' => Product::findOrFail($id)->first()
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.products.edit',
        [
            'product' => $product,
            'menues'=> Menu::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/home');
    }

    public function reporting()
    {
      return view('admin.reporting.index');
    }
}
