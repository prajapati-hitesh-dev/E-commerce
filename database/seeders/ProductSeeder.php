<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create categories
        $categories = [
            [
                'name' => 'Textiles & Fashion',
                'slug' => 'textiles',
                'description' => 'Traditional and modern textiles, clothing, and fashion accessories',
                'icon' => '👕',
                'is_active' => true
            ],
            [
                'name' => 'Food & Beverages',
                'slug' => 'food',
                'description' => 'Organic and traditional food products',
                'icon' => '🌿',
                'is_active' => true
            ],
            [
                'name' => 'Handicrafts',
                'slug' => 'handicrafts',
                'description' => 'Traditional handicrafts and artisanal products',
                'icon' => '🪔',
                'is_active' => true
            ],
            [
                'name' => 'Beauty & Cosmetics',
                'slug' => 'cosmetics',
                'description' => 'Natural and Ayurvedic beauty products',
                'icon' => '🧴',
                'is_active' => true
            ],
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'description' => 'Eco-friendly and sustainable electronics',
                'icon' => '📱',
                'is_active' => true
            ],
            [
                'name' => 'Home & Decor',
                'slug' => 'home',
                'description' => 'Home decoration and lifestyle products',
                'icon' => '👜',
                'is_active' => true
            ]
        ];

        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }

        // Create products
        $products = [
            [
                'name' => 'Handwoven Khadi Shirt',
                'description' => 'Premium handwoven khadi shirt made by local artisans using traditional techniques.',
                'vendor' => 'Gujarat Khadi Gramodyog',
                'price' => 1299.00,
                'original_price' => 1699.00,
                'image' => '👕',
                'badge' => 'Made in India',
                'rating' => 4.5,
                'category_id' => 1,
                'is_active' => true,
                'stock_quantity' => 50
            ],
            [
                'name' => 'Organic Turmeric Powder',
                'description' => 'Pure organic turmeric powder sourced directly from local farmers.',
                'vendor' => 'Rajasthan Spices Co.',
                'price' => 299.00,
                'original_price' => 399.00,
                'image' => '🌿',
                'badge' => 'Organic',
                'rating' => 4.8,
                'category_id' => 2,
                'is_active' => true,
                'stock_quantity' => 100
            ],
            [
                'name' => 'Brass Handicraft Lamp',
                'description' => 'Beautiful brass lamp crafted by traditional artisans with intricate designs.',
                'vendor' => 'Moradabad Artisans',
                'price' => 2499.00,
                'original_price' => 3299.00,
                'image' => '🪔',
                'badge' => 'Handcrafted',
                'rating' => 4.7,
                'category_id' => 3,
                'is_active' => true,
                'stock_quantity' => 25
            ],
            [
                'name' => 'Ayurvedic Face Cream',
                'description' => 'Natural face cream with traditional Ayurvedic ingredients for healthy skin.',
                'vendor' => 'Kerala Ayurveda',
                'price' => 799.00,
                'original_price' => 999.00,
                'image' => '🧴',
                'badge' => 'Ayurvedic',
                'rating' => 4.6,
                'category_id' => 4,
                'is_active' => true,
                'stock_quantity' => 75
            ],
            [
                'name' => 'Bamboo Smartphone Case',
                'description' => 'Sustainable bamboo case for smartphones, environmentally friendly and durable.',
                'vendor' => 'Assam Bamboo Craft',
                'price' => 599.00,
                'original_price' => 799.00,
                'image' => '📱',
                'badge' => 'Eco-Friendly',
                'rating' => 4.4,
                'category_id' => 5,
                'is_active' => true,
                'stock_quantity' => 60
            ],
            [
                'name' => 'Jute Shopping Bag',
                'description' => 'Eco-friendly jute shopping bag, perfect for sustainable shopping.',
                'vendor' => 'Bengal Jute Works',
                'price' => 199.00,
                'original_price' => 299.00,
                'image' => '👜',
                'badge' => 'Biodegradable',
                'rating' => 4.3,
                'category_id' => 6,
                'is_active' => true,
                'stock_quantity' => 200
            ]
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
