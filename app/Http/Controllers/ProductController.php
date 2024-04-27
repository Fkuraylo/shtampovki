<?php

namespace App\Http\Controllers;


use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
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
        //TODO: save the data from request to db
        $data = $request->validated();
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function show() {
        return view('product.show');
    }

    public function edit() {
        $product = 'prodTest';

        $array = array(
            'id' => 1,
            2 => 'sdf',
            'xxx' => 'yyy'
        );

        $categories = (object)$array;

        return view('product.edit', compact('product', 'categories'));
    }

    public function update() {
        return 'Save editing to db';
    }

    public function destroy() {
        return 'delete obj fr db';
    }
}
