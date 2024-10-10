<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class CartController extends Controller
// {
//     // Add item to cart
//     public function addToCart(Request $request)
//     {
//         // Get the current cart from the session (or create a new one if it doesn't exist)
//         $cart = session()->get('cart', []);

//         $id = $request->id;
//         $name = $request->name;
//         $price = $request->price;
//         $image = $request->image;

//         // Check if the item already exists in the cart
//         if (isset($cart[$id])) {
//             $cart[$id]['quantity'] += 1; // Increase the quantity
//         } else {
//             // Add new item to the cart
//             $cart[$id] = [
//                 "name" => $name,
//                 "price" => $price,
//                 "image" => $image,
//                 "quantity" => 1
//             ];
//         }

//         // Store the updated cart in the session
//         session()->put('cart', $cart);

//         // Return the updated cart and total price as JSON
//         return response()->json([
//             'cart' => $cart,
//             'total' => $this->getCartTotal($cart)
//         ]);
//     }

//     // Remove item from cart
//     public function removeFromCart($id)
//     {
//         $cart = session()->get('cart', []);

//         if (isset($cart[$id])) {
//             unset($cart[$id]); // Remove the item from the cart
//             session()->put('cart', $cart);
//         }

//         return response()->json([
//             'cart' => $cart,
//             'total' => $this->getCartTotal($cart)
//         ]);
//     }

//     // Get total price of the cart
//     private function getCartTotal($cart)
//     {
//         $total = 0;
//         foreach ($cart as $item) {
//             $total += $item['price'] * $item['quantity'];
//         }
//         return $total;
//     }

//     // Get cart items
//     public function getCart()
//     {
//         $cart = session()->get('cart', []);
//         return response()->json([
//             'cart' => $cart,
//             'total' => $this->getCartTotal($cart)
//         ]);
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Add item to the cart
    public function add(Request $request)
    {
        // Get the cart from the session or initialize it
        $cart = Session::get('cart', []);
        
        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');
        $image = $request->input('image');

        // If item already exists in the cart, increase the quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Add new item to the cart
            $cart[$id] = [
                'name' => $name,
                'price' => $price,
                'image' => $image,
                'quantity' => 1
            ];
        }

        // Store the updated cart in the session
        Session::put('cart', $cart);

        // Calculate total price
        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        // Return the updated cart and total as a JSON response
        return response()->json(['cart' => $cart, 'total' => $total]);
    }

    // View cart items
    public function view()
    {
        // Get the cart from the session
        $cart = Session::get('cart', []);
        
        // Calculate total price
        $total = collect($cart)->sum(function ($item) {
            return $item['price'] * $item['quantity'];
        });

        return response()->json(['cart' => $cart, 'total' => $total]);
    }
}