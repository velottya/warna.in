<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Carts;
use App\Models\Orders;
use App\Models\Transactions;

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

    public function cekout(Request $request)
    {
        $product_id = $request->product_id;
        $product = Product::findOrFail($product_id);
    
        // Mengirim data produk ke view cekout
        return view('home.sentra.cekout', compact('product'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'fullName' => 'required|string',
            'address' => 'required|string',
            'phoneNumber' => 'required|string',
            'catatan' => 'nullable|string',
            'total_price' => 'required|string',
            'product_id' => 'required|exists:products,id',
        ]);

        // Simpan data order ke dalam database
        $order = new Orders();
        $order->product_id = $validatedData['product_id'];
        $order->full_name = $validatedData['fullName'];
        $order->address = $validatedData['address'];
        $order->phone_number = $validatedData['phoneNumber'];
        $order->note = $validatedData['catatan'];
        $order->total_price = $validatedData['total_price'];
        $order->save();

        // Redirect ke halaman lain setelah order berhasil disimpan
        return redirect()->route('sentra.bayar')->with('success', 'Pesanan berhasil ditempatkan!');
    }

    public function bayar(Request $request)
    {
        $product_id = $request->input('product_id');
        $product = Product::findOrFail($product_id);

        return view('home.sentra.form-bayar', compact('product'));
    }
    
}