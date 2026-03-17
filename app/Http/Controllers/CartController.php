<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        
        $totalPrice = 0;
        foreach($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }

        return view('cart.index', compact('cart', 'totalPrice'));
    }

    public function add(Request $request, Product $product)
    {
        $cart = session()->get('cart', []);
        $quantityToAdd = $request->input('quantity', 1);

        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantityToAdd;
        } else {
            $cart[$product->id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => $quantityToAdd,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Producto añadido al carrito exitosamente!');
    }

    public function update(Request $request, $id)
    {
        $cart = session()->get('cart');
        
        if($request->has('quantity')) {
            $quantity = max((int) $request->quantity, 1);
            $cart[$id]["quantity"] = $quantity;
            session()->put('cart', $cart);
        }
        
        return redirect()->back()->with('success', 'Cantidad actualizada!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Producto eliminado del carrito!');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'El carrito ha sido vaciado.');
    }
}
