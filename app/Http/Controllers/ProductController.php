<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    
    public function createProduct(Request $request){
        $products=Products::create($request->all());
        return['status'=>true,'message'=>'product added successfully bah'];


    }
    public function getProduct($id){
        $products=Products::find($id);
        return['status'=>true,'products'=>$products];
        
    }
    public function AllProduct(){
        $products=Products::all();
        return['status',true,'list'=>$products];
        
    }
    public function updateProduct(Request $request,$id){
        $products=Products::find($id);
        $products->update($request->all());
        return['status'=>true,'message'=>'Product updated successfully'];
        
    }
    public function deleteProduct($id){
        $products=Products::find($id);
        $products->delete();
        return['status'=>true,'message'=>'product deleted successfull'];
        
    }
}
