<?php

namespace Database\Seeders;

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
        

        // Create user manual
        // User::create([
        //     'name' => 'Ackerman',
        //     'email' => 'ackerman@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Agokk',
        //     'email' => 'agokk@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // END

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create(); 

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita tenetur delectus assumenda culpa amet sunt, illum incidunt nihil?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita tenetur delectus assumenda culpa amet sunt, illum incidunt nihil? Et explicabo similique officiis unde voluptas dolorem vel eius accusamus, in adipisci! Vitae totam, nobis iusto dolore autem porro cumque eaque architecto quisquam deserunt aliquid. Sapiente, eveniet. Eligendi architecto qui, nihil ab aperiam, error, labore temporibus omnis suscipit excepturi dolore cum ea ratione optio nam facere quam a? Totam consectetur ratione possimus nostrum libero. Deserunt obcaecati voluptatum dolor atque accusantium, dolorum alias nihil facilis praesentium cum itaque dolores magni, iste pariatur dolore nemo debitis, provident consequuntur eos assumenda reiciendis ipsum! Error, incidunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita tenetur delectus assumenda culpa amet sunt, illum incidunt nihil?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita tenetur delectus assumenda culpa amet sunt, illum incidunt nihil? Et explicabo similique officiis unde voluptas dolorem vel eius accusamus, in adipisci! Vitae totam, nobis iusto dolore autem porro cumque eaque architecto quisquam deserunt aliquid. Sapiente, eveniet. Eligendi architecto qui, nihil ab aperiam, error, labore temporibus omnis suscipit excepturi dolore cum ea ratione optio nam facere quam a? Totam consectetur ratione possimus nostrum libero. Deserunt obcaecati voluptatum dolor atque accusantium, dolorum alias nihil facilis praesentium cum itaque dolores magni, iste pariatur dolore nemo debitis, provident consequuntur eos assumenda reiciendis ipsum! Error, incidunt.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita tenetur delectus assumenda culpa amet sunt, illum incidunt nihil?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita tenetur delectus assumenda culpa amet sunt, illum incidunt nihil? Et explicabo similique officiis unde voluptas dolorem vel eius accusamus, in adipisci! Vitae totam, nobis iusto dolore autem porro cumque eaque architecto quisquam deserunt aliquid. Sapiente, eveniet. Eligendi architecto qui, nihil ab aperiam, error, labore temporibus omnis suscipit excepturi dolore cum ea ratione optio nam facere quam a? Totam consectetur ratione possimus nostrum libero. Deserunt obcaecati voluptatum dolor atque accusantium, dolorum alias nihil facilis praesentium cum itaque dolores magni, iste pariatur dolore nemo debitis, provident consequuntur eos assumenda reiciendis ipsum! Error, incidunt.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita tenetur delectus assumenda culpa amet sunt, illum incidunt nihil?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita tenetur delectus assumenda culpa amet sunt, illum incidunt nihil? Et explicabo similique officiis unde voluptas dolorem vel eius accusamus, in adipisci! Vitae totam, nobis iusto dolore autem porro cumque eaque architecto quisquam deserunt aliquid. Sapiente, eveniet. Eligendi architecto qui, nihil ab aperiam, error, labore temporibus omnis suscipit excepturi dolore cum ea ratione optio nam facere quam a? Totam consectetur ratione possimus nostrum libero. Deserunt obcaecati voluptatum dolor atque accusantium, dolorum alias nihil facilis praesentium cum itaque dolores magni, iste pariatur dolore nemo debitis, provident consequuntur eos assumenda reiciendis ipsum! Error, incidunt.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
