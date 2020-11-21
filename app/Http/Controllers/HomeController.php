<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::take(30)->get();

        $categories = Category::whereNull('parent_id')->get();


        return view('home', ['allProducts' => $products,'categories'=>$categories]);
    }

    public function contact()
    {
        return view('contact');
    }
}
