<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::all();

        return view('pages.home', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'unique:' . Product::class],
            'details' => ['required', 'string'],
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'price' => ['required']
        ]);

        $newImageName = Str::random(30) . '.' . $request->image->extension();

        $request->image->move(public_path('product-images'), $newImageName);

        $product = new Product;

        $product->name = $request->name;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->image = 'product-images/'.$newImageName;


        $product->save();

        return redirect('/add-product')->with("status", "product added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
