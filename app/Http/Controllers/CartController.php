<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        return view('cart.shop',compact('products'));
    }

    public function cart()
    {
        return view('cart.cart',);
    }

    public function addToCart($productID)
    {
        $product = Product::findOrFail($productID);

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => '1',
            'price' => $product->price,
            'weight'=>0,
            'options' => [
                'image' => $product->image
            ]
        ]);

        return redirect()->back()->with('success', 'Product is added into the cart!');
    }

    public function qTyIncrement($rowId)
    {
        $product = Cart::get($rowId);
        $updateQty = $product->qty + 1;

        Cart::update($rowId, $updateQty);

        return redirect()->back()->with('success','Product Quantity Added!');
    }

    public function qTyDecrement($rowId)
    {
        $product = Cart::get($rowId);
        $updateQty = $product->qty - 1;

        if($updateQty > 0){
            Cart::update($rowId, $updateQty);
        }

        return redirect()->back()->with('success','Product Quantity Remove!');

    }

    public function removeProduct($rowId)
    {
        $product = Cart::get($rowId);

        Cart::remove($rowId);

        return redirect()->back()->with('success','Item has been removed from cart!');
    }
}
