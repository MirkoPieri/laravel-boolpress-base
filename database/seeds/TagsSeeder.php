<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;


class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Tag::class, 40)
            -> create()
            -> each(function($tag) {

              $posts = Post::inRandomOrder()->take(rand(1,20))->get();
              $tag -> posts() -> attach($posts);
            });
    }
}
