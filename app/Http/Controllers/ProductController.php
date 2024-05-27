<?php

namespace App\Http\Controllers;


use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function show(Product $product) {
        $categories = Category::all();
        return view('product.show', compact('product', 'categories'));
    }

    public function edit(Product $product) {
        $categories = Category::all();
        $tags = Tag::all();

        return view('product.edit', compact('product', 'categories', 'tags'));
    }

    public function update(UpdateRequest $request, Product $product) {
        //$data = $request->validated();

        return redirect()->route('product.index');
    }

    public function destroy() {
        return 'delete obj fr db';
    }
}
