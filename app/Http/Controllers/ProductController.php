<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return 'Index action';
    }

    public function create() {
        return 'Create form action';
    }

    public function store() {
        return 'Save to db action';
    }

    public function show() {
        return 'show one action';
    }

    public function edit() {
        return 'Edit form action';
    }

    public function update() {
        return 'Save editing to db';
    }

    public function destroy() {
        return 'delete obj fr db';
    }
}
