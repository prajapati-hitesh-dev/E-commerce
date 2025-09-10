<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Featured products data (matching the React version)
        $featuredProducts = [
            [
                'id' => 1,
                'name' => 'Handwoven Khadi Shirt',
                'vendor' => 'Gujarat Khadi Gramodyog',
                'price' => 1299,
                'originalPrice' => 1699,
                'image' => '👕',
                'badge' => 'Made in India',
                'rating' => 4.5
            ],
            [
                'id' => 2,
                'name' => 'Organic Turmeric Powder',
                'vendor' => 'Rajasthan Spices Co.',
                'price' => 299,
                'originalPrice' => 399,
                'image' => '🌿',
                'badge' => 'Organic',
                'rating' => 4.8
            ],
            [
                'id' => 3,
                'name' => 'Brass Handicraft Lamp',
                'vendor' => 'Moradabad Artisans',
                'price' => 2499,
                'originalPrice' => 3299,
                'image' => '🪔',
                'badge' => 'Handcrafted',
                'rating' => 4.7
            ]
        ];

        return view('home', compact('featuredProducts'));
    }
}
