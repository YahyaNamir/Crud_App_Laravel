<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productF(){
        $products = Products::all();
        return view("Products.product", ['products' => $products] );
    }

    public function createF(){
        return view("Products.create");
    }
    
    public function storeF(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'price'=> 'required|decimal:0,4',
            'description'=> 'required'
        ]);
        
        $newData = Products::create($data);

        return redirect()->route('products.product')->with('successAdded', 'Added Successfully');
    }
    
    public function modifyF(Products $products){
        return view("Products.modify", ['products' => $products]);
    }
    
    public function updateF(Products $products, Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'price'=> 'required|decimal:0,4',
            'description'=> 'required'
        ]);
        
        $products->update($data);
        
        return redirect()->route('products.product')->with('successUpdate', 'Updated Successfully');
        
    }
    public function deleteF(Products $products){
        $products->delete();
        return redirect()->route('products.product')->with('successDelete', 'Deleted Successfully');
    }
    

}
