<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $name = $this->faker->sentence(2);
        $category = Category::all()->random();
        $quantity=15;
        return [
            'name'=>$name,
            'slug'=> Str::slug($name),
            'reference' => $this->faker->sentence(1),
            'weight' => $this->faker->randomElement([10, 20, 30]),
            'price' => $this->faker->randomElement([19.990,49.990,99.990]),
            'category_id' => $category->id,
            'quantity'=>$quantity,
            'status'=>2,
        ];
    }
}
