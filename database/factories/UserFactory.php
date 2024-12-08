<?php

namespace Database\Factories;

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;
    
    public function definition()
    {
        static $password;

        return [
            'name'           => $this->faker->name,
            'email'          => $this->faker->safeEmail,
            'status'         => true,
            'confirm_code'   => Str::random(64),
            'password'       => $password ?: $password = bcrypt('secret'),
            'remember_token' => Str::random(10),
        ];
    }

    public function admin()
    {
        return $this->state([
            'is_admin' => 1,
            'password' => bcrypt('admin'),
        ]);
    }
}
