<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user_ids = \App\User::pluck('id')->random();
        $category_ids = \App\Category::pluck('id')->random();
        $title = $this->faker->sentence(mt_rand(3, 10));
        return [
            'user_id'      => $user_ids,
            'category_id'  => $category_ids,
            'last_user_id' => $user_ids,
            'slug'     => Str::slug($title),
            'title'    => $title,
            'subtitle' => strtolower($title),
            'content'  => $this->faker->paragraph,
            'page_image'       => $this->faker->imageUrl(),
            'meta_description' => $this->faker->sentence,
            'is_draft'         => false,
            'published_at'     => $this->faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now')
        ];
    }
}
