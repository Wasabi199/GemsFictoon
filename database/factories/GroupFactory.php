<?php

namespace Database\Factories;

use App\Enums\GroupType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    use WithFaker;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = [
            GroupType::PUBLIC,
            GroupType::PRIVATE
        ];

        return [
            'name'=>$this->faker->word(),
            'type'=>$this->faker->randomElement($type),
            'introduction'=>$this->faker->words(10, true)
        ];
    }
}
