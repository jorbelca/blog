<?php



namespace Database\Factories;

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Visitor>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $article_id = \App\Article::pluck('id')->random();
        $num = $this->faker->numberBetween(1, 100);

        $article = Article::find($article_id);
        $article->view_count = $num;
        $article->save();

        return [
            'article_id' => $article_id,
            'ip'         => $this->faker->ipv4,
            'country'    => 'CN',
            'clicks'     => $num
        ];
    }
}
