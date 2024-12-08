<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Discussion>
 */
class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_ids = \App\User::pluck('id')->random();
        return [
            'user_id'      => $user_ids,
            'last_user_id' => $user_ids,
            'title'        => $this->faker->sentence,
            'content'      => $this->faker->paragraph,
            'status'       => true,
        ];
    }
}
