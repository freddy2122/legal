<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function dashboard()
    {
        $stats = [

            'products_count' => Product::count(),
        ];

        return inertia('Dashboard', [
            'stats' => $stats
        ]);
    }

    public function index()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('welcome', compact('categories', 'products'));
    }

    public function about()
    {
        return view('partials.about');
    }

    public function contact()
    {
        return view('partials.contact');
    }

    public function product_list()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('partials.product_list', compact('categories', 'products'));
    }

    public function showCategory($slug)
    {
        // Récupérer la catégorie par son slug
        $categories = Category::where('slug', $slug)->firstOrFail();
        $allCategories = Category::all();
        // Récupérer les produits associés à cette catégorie
        $products = Product::where('category_id', $categories->id)->get();

        // Retourner la vue avec la catégorie et ses produits
        return view('partials.category', compact('categories', 'products','allCategories'));
    }
}
