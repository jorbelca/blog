<?php

namespace Database\Factories;

use App\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name'      => $this->faker->name,
            'parent_id' => 0,
            'path'      => $this->faker->url,
        ];
    }
}
