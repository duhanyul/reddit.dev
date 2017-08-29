<?php

use Illuminate\Database\Seeder;

use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=10 ; $i++) {
            $post = new Post();
            $post->title = "Post title number: $i";
            $post->content = "Post content number: $i";
            $post->url = "Post URL number: $i";
            $post->created_by = mt_rand(42,51);
            $post->save();
        }
    }
}
