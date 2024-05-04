<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Carts;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $product = Product::find($request->id);

        if($product == null) {
            return response()->json([
                'status'=>false,
                'message'=>'Product not found'
            ]);
        }

        if(Cart::count() > 0) {

            $cartContent = Cart::content();
            $productAlreadyExist = false;

            foreach ($cartContent as $item) {
                if ($item->id == $product->id) {
                    $productAlreadyExist = true;
                }
            }
            if ($productAlreadyExist == false) {
                Cart::add($product->id, $product->name, 1, $product->price);
                $status = true;
                $message = $product->name. ' added in cart';

            } else {
                $status = false;
                $message = $product->name. ' already added in cart';
            }

        } else {
            // Cart empty
            Cart::add($product->id, $product->name, 1, $product->price);
            $status = true;
            $message = $product->name. ' added in cart';
        }

        return response()->json([
            'status'=>$status,
            'message'=>$message
        ]);
    }

    public function cart()
    {
        return view('home.sentra.addcart');
    }
}