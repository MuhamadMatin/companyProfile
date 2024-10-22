<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        $name = $this->faker->sentence(3);
        $slug = Str::slug($name);
        $categories = Category::pluck('id')->toArray();
        return [
            'name' => $name,
            'slug' => $slug,
            'image' => $this->faker->imageUrl(),
            'desk' => $this->faker->paragraph(100),
            'category_id' => $this->faker->randomElement($categories),
        ];
    }
}
