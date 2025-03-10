<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return View::make('home')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View::make('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validated();

        $path = $request->file('image')->store('uploads', 'public');

        Product::create(attributes: [
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'image' => $path
        ]);

        return redirect()->route('home');
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
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return View::make(view: 'product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, Product $product)
    {
        $request->validated();

        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
            $product->image = $path;
        }

        $product->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect()->route('home');
    }
}
