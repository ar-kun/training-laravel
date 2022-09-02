<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\PostModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'arkun',
        //     'email' => 'arkun@gamil.com',
        //     'password' => bcrypt('arkun12')
        // ]);
        // User::create([
        //     'name' => 'aria',
        //     'email' => 'aria@gamil.com',
        //     'password' => bcrypt('aria12')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        PostModel::factory(20)->create();


        // PostModel::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum deserunt, beatae veniam autem neque odio?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, dolores doloremque consectetur laboriosam vel quis neque quam, architecto, quo nulla perspiciatis rem dolore animi facilis sed magni error pariatur quasi corporis quae minima officiis. A hic autem, perferendis maiores sunt laborum quidem quae quos harum nobis exercitationem eaque qui officiis atque eos, alias consequatur perspiciatis debitis soluta excepturi cumque fugit. Hic atque deserunt doloribus eaque? Optio, pariatur?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nulla distinctio. Alias ipsum ex perferendis. Maxime illo nesciunt debitis molestias nulla magni minima ipsa eaque necessitatibus libero. Ab totam porro dolores beatae quia. Eius beatae deserunt, nemo quod cum nostrum facilis officia perspiciatis rem minus, laborum, at ex provident natus ut aliquid autem illum inventore repellendus sed! Tempora, error maiores labore nulla, sequi laudantium saepe quis animi eaque possimus eos eligendi? Minus quo molestias harum molestiae minima sit expedita necessitatibus! Dolore, repudiandae quasi quis tempora consequuntur neque nulla rem commodi repellat voluptatibus impedit harum recusandae dicta similique accusantium consequatur delectus.</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nulla distinctio. Alias ipsum ex perferendis. Maxime illo nesciunt debitis molestias nulla magni minima ipsa eaque necessitatibus libero. Ab totam porro dolores beatae quia. que accusantium consequatur delectus.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}