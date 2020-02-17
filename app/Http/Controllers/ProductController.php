<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return view('products.index', ['products' => $product]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // prendo i dati del form
        $form_data = $request->all();
        //creo nuova istanza
        $product = new Product();
        $product->name = $form_data['name'];
        $product->description = $form_data['description'];
        $product->price = $form_data['price'];
        //salvo
        $product->save();
        //faccio redirect all'index
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        //model come parametro
        return view('products.show', ['product'=> $product]);
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
