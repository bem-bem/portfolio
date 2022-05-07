<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
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
        User::factory(5)->create();
        Category::factory(5)->create();
        Post::factory(50)->create();
        Comment::factory(100)->create();
    }
}
