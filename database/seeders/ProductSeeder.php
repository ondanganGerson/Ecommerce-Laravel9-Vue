<?php

namespace Database\Seeders;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => "Luxurios Watch",
                'slug' => 'luxurios-watch',
                'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li><li><i class="icofont-check"></i> Water Resistant</li><li><i class="icofont-check"></i> Movement Button</li><li><i class="icofont-check"></i> 1 Year Guaranteef</li></ul>',
                'image_name' => 'watch-1.png',
                'price' => 550.00,
                'sale_price' => 420.00,
            ],
            [
                'name' => "Luxurios Watch",
                'slug' => 'luxurios-watch',
                'description' => '<ul><li><i class="icofont-check"></i> Stainless Steel</li><li><i class="icofont-check"></i> Water Resistant</li><li><i class="icofont-check"></i> High Quality Glass</li><li><i class="icofont-check"></i> 2 Years Guarantee</li></ul>',
                'image_name' => 'watch-2.png',
                'price' => 250.00,
                'sale_price' => 120.00,
            ],
            [
                'name' => "Luxurios Watch",
                'slug' => 'luxurios-watch',
                'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li><li><i class="icofont-check"></i> Water Resistant</li><li><i class="icofont-check"></i> 3 Steps Protection</li><li><i class="icofont-check"></i> 1 Year Guarantee</li></ul>',
                'image_name' => 'watch-3.png',
                'price' => 280.00,
                'sale_price' => 140.00,
            ],
            [
                'name' => "Luxurios Watch",
                'slug' => 'luxurios-watch',
                'description' => '<ul><li><i class="icofont-check"></i> PVD Coating</li><li><i class="icofont-check"></i> Water Resistant</li><li><i class="icofont-check"></i> Clear Supre Glass</li><li><i class="icofont-check"></i> 2 Years Guarantee</li></ul>',
                'image_name' => 'watch-4.png',
                'price' => 450.00,
                'sale_price' => 220.00,
            ],
        ];

        foreach ($data as $product) {
            Product::insert([
                'name' => $product['name'],
                'slug' => $product['slug'],
                'description' => $product['description'],
                'image_name' => $product['image_name'],
                'price' => $product['price'],
                'sale_price' => $product['sale_price'],
            ]);
        }
    }
}
