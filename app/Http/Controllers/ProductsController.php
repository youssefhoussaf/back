<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;

class ProductsController extends Controller
{
    

    function getProducts(){
        $data = products::orderby('id','desc')->get();

        return ["success"=>true,"data"=>$data];
    }

    function addProducts(Request $request){
        $product = new products();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->qte = $request->qte;

        $check = $product->save();

        if($check)
            return ["success"=>true];
        else
            return ["success"=>false];
    }

    function updateProducts(Request $request){
        $check = products::where('id','=',$request->id)->update([
            "name"=>$request->name,
            "price"=>$request->price,
            "qte"=>$request->qte,
        ]);

        if($check)
            return ["success"=>true];
        else
            return ["success"=>false];
    }

    function deleteProducts(Request $request){
        $check = products::where('id','=',$request->id)->delete();

        if($check)
            return ["success"=>true];
        else
            return ["success"=>false];
    }

}
