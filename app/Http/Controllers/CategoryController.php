<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(){
        $categories = Category::all();
        return view('backend.category.category_list', compact('categories'));
    }


    public function add()
    {
        return view('backend.category.category_add');
    }

    public function store(Request $request){
        Category::create([

            'name' =>$request->name,
            'description' =>$request->description,
            'photo' =>$request->photo,

        ]);
        return redirect()->route('list.category');
        
    }
}
