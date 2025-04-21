<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Product;
class ProductController extends Controller
{
    //

    public function addProduct(Request $request)
    {
        $validate = Validator::make($request->all(), [
            
            'name' => 'required',
            
            'price'=>'required',           
        ]);
        if ($validate->fails()) {
            return response()->json(['error' => $validate->errors()], 422);
        }

        $product=new Product();
        $product->name=$request->name;
        // $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->category_id=$request->category_id;
      
        if($product->save())
        {
            $resp['status'] = true;
            $resp['message'] = "Product added successfully!";
            return response()->json($resp);
        }
        else {
            $resp['status'] = false;
            $resp['message'] = "Product Not added successfully!";
            return response()->json($resp);
        }
    }
}
