<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Product;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();
        $products = Product::where('stock', '>', 0)
                            ->where('active', 1)
                            ->get();
        // Logic to retrieve and display locations
        return view('location.index', [
            'heroes' => $heroes,
            'products' => $products,
            'socialnetworks' => $socialnetworks,
        ]);
    }

    public function show($slug)
    {

        $product = Product::where('slug', $slug)
                                    ->where('stock', '>', 0)
                                    ->where('active', 1)
                                    ->firstOrFail();
        $heroes = Hero::first();
        $socialnetworks = SocialNetwork::whereStatus(1)->get();

        // Logic to display a specific location
        return view('location.show', [

            'heroes' => $heroes,
            'product' => $product,
            'socialnetworks' => $socialnetworks,
        ]);
    }
}
