<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $user = User::all();
        $userID = $user->random()->id;

        $postID = Post::inRandomOrder()->value('id');

        return [
            'user_id' => $userID,
            'post_id' => $postID,
            'reviewer_name' => $user->find($userID)->name,
            'comment_context' => fake()->paragraph(),
            'reviewer_email' => $user->find($userID)->email,
        ];
    }
}
