<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories_count = Category::count();
        $categories = Category::latest()->take(4)->get();
        $products_count = Product::count();
        $products = Product::latest()->take(4)->get();
        return view('home', compact('categories_count', 'categories', 'products_count', 'products'));
    }
}
