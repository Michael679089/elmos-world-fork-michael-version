<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use App\Models\Tag;

class RelationshipSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $roles = Role::pluck('id')->toArray();

        foreach ($users as $user) {
            DB::table('user_role')->insert([
                'user_id' => $user->id,
                'role_id' => fake()->randomElement($roles),
            ]);
        }

        $posts = Post::all();
        $tags = Tag::pluck('id')->toArray();
        $categories = Tag::pluck('id')->toArray();

        foreach ($posts as $post) {
            DB::table('post_tag')->insert([
                'post_id' => $post->id,
                'tag_id' => fake()->randomElement($tags),
            ]);

            DB::table('post_category')->insert([
                'post_id' => $post->id,
                'category_id' => fake()->randomElement($categories),
            ]);
        }
    }
}
