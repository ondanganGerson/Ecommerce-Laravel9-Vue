<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "Luxurios Watch",
            'slug' => "luxurios-watch",
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li><li><i class="icofont-check"></i> Water Resistant</li><li><i class="icofont-check"></i> 3 Steps Protection</li><li><i class="icofont-check"></i> 1 Year Guarantee</li></ul>',
            'image_name' => 'watch-01.png',
            'price' => rand(250, 450),
            'sale_price' => rand(150, 400),
        ];
    }
}
