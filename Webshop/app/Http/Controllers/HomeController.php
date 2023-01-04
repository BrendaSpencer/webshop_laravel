<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $products = Product::orderBy('created_at', 'desc')->get();
        return view('home',[
            'products' =>$products
        ]);
    }
}
