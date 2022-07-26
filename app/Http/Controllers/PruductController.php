<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class PruductController extends Controller

{
   public function list(){
   $products = Product::all();
   return view('backend.product.product_list', compact('products'));
   }

   public function add(){
      $categories = Category::all();
   return view('backend.product.product_add', compact('categories'));
   }
   
   public function store(Request $request){
      // dd($request);
      // dd($request->name);
      Product::create([
         // 'database column name' => $request->input field name
         'name' =>$request->name,
         'description' =>$request->description,
         'photo' =>$request->photo,
         'price' =>$request->price,
         'quantity' =>$request->qty,
         'category'=>$request->category,

      ]);
      return redirect()->route('list.product');
   }
}
