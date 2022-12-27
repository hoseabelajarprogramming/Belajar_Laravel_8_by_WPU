<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

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
        //video 9
        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('test@example.com')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe atque culpa nesciunt ullam molestias at iusto quidem harum quam qui voluptatem sapiente sunt cupiditate, natus sit iure, numquam distinctio ipsa quas obcaecati excepturi sint maiores ut nihil.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe atque culpa nesciunt ullam molestias at iusto quidem harum quam qui voluptatem sapiente sunt cupiditate, natus sit iure, numquam distinctio ipsa quas obcaecati excepturi sint maiores ut nihil. Autem, nam? Reprehenderit, nihil quasi, unde dicta saepe deserunt commodi animi optio, consequuntur velit corrupti perspiciatis earum aliquam odio mollitia dolorum! Veniam, itaque quisquam.</p><p>Id culpa iste vel saepe? Beatae sit minus praesentium magnam omnis asperiores obcaecati quia magni placeat, mollitia sunt numquam, rerum nisi tenetur natus aliquam aut iusto iste tempora delectus doloremque earum. Voluptate maiores perspiciatis, sequi incidunt dignissimos eum nulla!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe atque culpa nesciunt ullam molestias at iusto quidem harum quam qui voluptatem sapiente sunt cupiditate, natus sit iure, numquam distinctio ipsa quas obcaecati excepturi sint maiores ut nihil.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe atque culpa nesciunt ullam molestias at iusto quidem harum quam qui voluptatem sapiente sunt cupiditate, natus sit iure, numquam distinctio ipsa quas obcaecati excepturi sint maiores ut nihil. Autem, nam? Reprehenderit, nihil quasi, unde dicta saepe deserunt commodi animi optio, consequuntur velit corrupti perspiciatis earum aliquam odio mollitia dolorum! Veniam, itaque quisquam.</p><p>Id culpa iste vel saepe? Beatae sit minus praesentium magnam omnis asperiores obcaecati quia magni placeat, mollitia sunt numquam, rerum nisi tenetur natus aliquam aut iusto iste tempora delectus doloremque earum. Voluptate maiores perspiciatis, sequi incidunt dignissimos eum nulla!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe atque culpa nesciunt ullam molestias at iusto quidem harum quam qui voluptatem sapiente sunt cupiditate, natus sit iure, numquam distinctio ipsa quas obcaecati excepturi sint maiores ut nihil.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe atque culpa nesciunt ullam molestias at iusto quidem harum quam qui voluptatem sapiente sunt cupiditate, natus sit iure, numquam distinctio ipsa quas obcaecati excepturi sint maiores ut nihil. Autem, nam? Reprehenderit, nihil quasi, unde dicta saepe deserunt commodi animi optio, consequuntur velit corrupti perspiciatis earum aliquam odio mollitia dolorum! Veniam, itaque quisquam.</p><p>Id culpa iste vel saepe? Beatae sit minus praesentium magnam omnis asperiores obcaecati quia magni placeat, mollitia sunt numquam, rerum nisi tenetur natus aliquam aut iusto iste tempora delectus doloremque earum. Voluptate maiores perspiciatis, sequi incidunt dignissimos eum nulla!</p>'
        // ]);
        //video 9

        //video 10
        User::factory(3)->create();
        Post::factory(20)->create();

        //video 10



    }
}
