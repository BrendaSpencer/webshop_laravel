<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.addProduct', [
            'categories' => ProductCategory::all(),
            // 'ingredienten' => Ingredient::all()
        ]);
    }

    public function show(Product $product){
       
        return view('product.product',[
            'product' => $product
        ]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            // 'duurtijd' => 'required',
            // 'moeilijkheid' => 'required'
        ]);

       $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            // 'duurtijd' => $request->duurtijd,
            // 'moeilijkheid' => $request->moeilijkheid,
            'user_id' =>$request->user()->id
        ]);

        $productId = $product->id;

        

        //  foreach($request->ingredient as $ingredientLijn){
           
        //     IngredientLijst::create([
        //         'ingredient_id' => $ingredientLijn[0],
        //         'aantal' => $ingredientLijn[1],
        //         'eenheid' => $ingredientLijn[2],
        //         'recept_id' => $receptId
        //     ]);
        // }
        foreach($request->categories as $categoryList){
       
        CategoryList::create([
            'product_id' => $productId,
            'product_category_id' => $categoryList
       ]);
    }
        
   
          return redirect('/home');
    
}
}