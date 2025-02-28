<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;


class ResourceFactory extends Factory
{
    use WithFaker;

    protected $model = Resource::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'type' => $this->faker->word,
            'description' => $this->faker->sentence
        ];
    }
}
