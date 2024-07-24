<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index() {
       $products = Product::all();
       
        return view('index', compact(['products']));
    }
    public function create() {
       
        
         return view('create');
     }
     public function store(Request $request) {
       
        Product::create($request->all());
        return redirect('/');
    }
    public function edit($id) {
       
       $product = Product::find($id);
        return view('/edit',compact(['product']));
    }
    public function update(Request $request,$id) {

        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/');
        
    }
    public function destroy($id) {

        $product = Product::find($id);
        $product->delete();
        return redirect('/');
        
    }
}
