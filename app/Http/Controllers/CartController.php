<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{



    public function addToCart(Request $request)
    {
        // Récupérer le panier de la session
        $cart = Session::get('cart', []);

        // Vérifier si le produit est déjà dans le panier
        if (isset($cart[$request->product_id])) {
            // Si le produit existe déjà, on augmente la quantité
            $cart[$request->product_id]['quantity'] += 1;
        } else {
            // Si le produit n'existe pas, on l'ajoute au panier
            $product = Product::findOrFail($request->product_id);
            $cart[$request->product_id] = [
                'id' => $product->id, // Assurez-vous que l'ID est bien ajouté
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => 1
            ];
        }

        Session::put('cart', $cart);

        // Retourner la réponse avec les informations mises à jour du panier
        return response()->json([
            'success' => 'Produit ajouté au panier !',
            'product' => $cart[$request->product_id], // Le produit ajouté
            'cart' => $cart, // Tout le panier mis à jour
            'cart_count' => count($cart), // Nombre total d'articles dans le panier
            'product_id' => $request->product_id, // L'ID du produit ajouté
        ]);
    }


    public function showCart()
    {
        $cart = session()->get('cart', []);
        return view('partials.cart', compact('cart'));
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->product_id])) {
            if ($request->action === "increase") {
                $cart[$request->product_id]['quantity'] += 1;
            } elseif ($request->action === "decrease" && $cart[$request->product_id]['quantity'] > 1) {
                $cart[$request->product_id]['quantity'] -= 1;
            }
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'cart' => $cart,
            'cart_count' => count($cart)
        ]);
    }

    public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->product_id])) {
            unset($cart[$request->product_id]);
            session()->put('cart', $cart);
        }

        return response()->json(['success' => 'Produit supprimé du panier.', 'cart_count' => count($cart)]);
    }
}
