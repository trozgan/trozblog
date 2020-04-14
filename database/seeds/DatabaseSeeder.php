<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      factory(Post::class, 20)
          ->create()
          ->each(function ($post) {
              factory(Comment::class, 5)
                  ->create([
                      'post_id' => $post->id
                  ]);
          });

    }
}
