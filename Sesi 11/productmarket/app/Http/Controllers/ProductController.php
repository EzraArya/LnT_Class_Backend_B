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
        return View::make('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validated();

        $path = $request->file('image')->store('uploads', 'public');

        Product::create([
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'image' => $path
        ]);

        return redirect()->route('product.index');
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
        return View::make('products.edit')->with('product', value: $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:png,jpg'
        ]);

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
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return redirect()->route('home');
    }
}
