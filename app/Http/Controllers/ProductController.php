<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function load(){
        $categories = \App\Models\Category::all();
        $products = \App\Models\Product::with('paper_types')->get();
        $paper_types = \App\Models\PaperType::all();
         return view('container', compact('categories', 'products', 'paper_types'));
    }

    public function load_cat($id){
        $categories = \App\Models\Category::all();
        $products = \App\Models\Product::all()->where('category_id', '=', $id);
        $paper_types = \App\Models\PaperType::all();
        return view('container', compact('categories', 'products', 'paper_types'));
    }

    public function load_type($id){
        $categories = \App\Models\Category::all();
        $products = \App\Models\PaperType::find($id)->products()->get();;
        $paper_types = \App\Models\PaperType::all();
        return view('container', compact('categories', 'products', 'paper_types'));
    }
    //
}
