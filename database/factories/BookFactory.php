<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::inRandomOrder()->first()->id,
            'title'=>$this->faker->word(),
            'summary'=>$this->faker->words(5, true),
            'genre_id'=>Genre::inRandomOrder()->first()->id,
            'category_id'=>Category::inRandomOrder()->first()->id,
            'image'=>'https://d1wnwqwep8qkqc.cloudfront.net/uploads/stage/stage_image/22739/optimized_product_thumb_children-stories-book-cover-541__1_.jpg'
        ];
    }
}
