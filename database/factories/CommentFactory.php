<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_ids = \App\User::pluck('id')->random();
        $discussion_ids = \App\Discussion::pluck('id')->random();
        $type = ['discussions', 'articles'];
        return [
            'user_id'             => $user_ids,
            'commentable_type'    => $type[mt_rand(0, 1)],
            'commentable_id'      => $discussion_ids,
            'content'             => $this->faker->paragraph
        ];
    }
}
