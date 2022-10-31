<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'M.Tegar Nurul Fuad Rosmali',
        //     'email' => '02tegarrosmali@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Ucup',
        //     'email' => 'ucup123@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

         Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium quaerat enim dolorem ratione vero dolore aspernatur nulla blanditiis? Harum ipsam facere corrupti recusandae vel aliquid aperiam repudiandae iste maxime voluptatum',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium quaerat enim dolorem ratione vero dolore aspernatur nulla blanditiis? Harum ipsam facere corrupti recusandae vel aliquid aperiam repudiandae iste maxime voluptatum, adipisci repellat quaerat similique quibusdam. Sequi, unde ad nostrum explicabo ullam quos quidem repellat officiis blanditiis error id, alias sapiente tempore asperiores rem excepturi, quis consequatur fuga adipisci! Cumque animi voluptas magnam odio ea iste eum temporibus praesentium quas fuga voluptates nostrum ex expedita, inventore impedit amet perspiciatis necessitatibus nisi eaque natus debitis, corporis unde eveniet. Alias eum atque nisi reiciendis accusantium, omnis, error aspernatur voluptates aut vitae earum.'
            
        // ]);
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium quaerat enim dolorem ratione vero dolore aspernatur nulla blanditiis? Harum ipsam facere corrupti recusandae vel aliquid aperiam repudiandae iste maxime voluptatum',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium quaerat enim dolorem ratione vero dolore aspernatur nulla blanditiis? Harum ipsam facere corrupti recusandae vel aliquid aperiam repudiandae iste maxime voluptatum, adipisci repellat quaerat similique quibusdam. Sequi, unde ad nostrum explicabo ullam quos quidem repellat officiis blanditiis error id, alias sapiente tempore asperiores rem excepturi, quis consequatur fuga adipisci! Cumque animi voluptas magnam odio ea iste eum temporibus praesentium quas fuga voluptates nostrum ex expedita, inventore impedit amet perspiciatis necessitatibus nisi eaque natus debitis, corporis unde eveniet. Alias eum atque nisi reiciendis accusantium, omnis, error aspernatur voluptates aut vitae earum.'

        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium quaerat enim dolorem ratione vero dolore aspernatur nulla blanditiis? Harum ipsam facere corrupti recusandae vel aliquid aperiam repudiandae iste maxime voluptatum',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium quaerat enim dolorem ratione vero dolore aspernatur nulla blanditiis? Harum ipsam facere corrupti recusandae vel aliquid aperiam repudiandae iste maxime voluptatum, adipisci repellat quaerat similique quibusdam. Sequi, unde ad nostrum explicabo ullam quos quidem repellat officiis blanditiis error id, alias sapiente tempore asperiores rem excepturi, quis consequatur fuga adipisci! Cumque animi voluptas magnam odio ea iste eum temporibus praesentium quas fuga voluptates nostrum ex expedita, inventore impedit amet perspiciatis necessitatibus nisi eaque natus debitis, corporis unde eveniet. Alias eum atque nisi reiciendis accusantium, omnis, error aspernatur voluptates aut vitae earum.'

        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium quaerat enim dolorem ratione vero dolore aspernatur nulla blanditiis? Harum ipsam facere corrupti recusandae vel aliquid aperiam repudiandae iste maxime voluptatum',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium quaerat enim dolorem ratione vero dolore aspernatur nulla blanditiis? Harum ipsam facere corrupti recusandae vel aliquid aperiam repudiandae iste maxime voluptatum, adipisci repellat quaerat similique quibusdam. Sequi, unde ad nostrum explicabo ullam quos quidem repellat officiis blanditiis error id, alias sapiente tempore asperiores rem excepturi, quis consequatur fuga adipisci! Cumque animi voluptas magnam odio ea iste eum temporibus praesentium quas fuga voluptates nostrum ex expedita, inventore impedit amet perspiciatis necessitatibus nisi eaque natus debitis, corporis unde eveniet. Alias eum atque nisi reiciendis accusantium, omnis, error aspernatur voluptates aut vitae earum.'

        // ]);
    }
}


