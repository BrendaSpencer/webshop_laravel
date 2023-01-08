<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $products = Product::orderBy('created_at', 'desc')
                            ->filter(request(['tag']))
                            ->get();
                     
        return view('home',[
            'products' =>$products
        ]);
    }
}
