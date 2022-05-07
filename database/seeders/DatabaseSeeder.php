<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //it should be in order
        Role::factory(1)->create();

        $users = User::factory(5)->create();
        foreach ($users as $user) {
            $user->image()->save(Image::factory()->make());
        }
        
        Category::factory(5)->create();
        Tag::factory(20)->create();
        
        $posts = Post::factory(50)->create();
        foreach ($posts as $post) {
            $tags_ids = [];
            $tags_ids[] = Tag::all()->random()->id;
            $tags_ids[] = Tag::all()->random()->id;
            $tags_ids[] = Tag::all()->random()->id;
            $post->tags()->sync($tags_ids);
            $post->image()->save(Image::factory()->make());
        }

        Comment::factory(100)->create();

        
    }
}
