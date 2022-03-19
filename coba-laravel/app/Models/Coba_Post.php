<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Arga Ackerman",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nihil, vitae numquam doloribus recusandae omnis quibusdam, sit cupiditate porro fugit velit ratione sunt quisquam debitis. Dolore, ad atque. Ad, sapiente."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Narata Azka",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur labore aut unde dolore similique sit deleniti nam harum velit. Totam similique veniam, modi eos corporis temporibus aspernatur reiciendis voluptates, dignissimos perspiciatis laudantium quidem nihil fugit ducimus architecto at placeat dolore facilis perferendis, nobis nisi odio. Quasi, commodi tempore quaerat eos, pariatur, esse molestias officiis corporis et sed quas possimus necessitatibus assumenda officia obcaecati voluptatem blanditiis facere similique dolorem voluptatum totam omnis ea ad porro? Amet vel asperiores sed tempora consequatur necessitatibus doloremque. Earum commodi sapiente asperiores natus. Atque nulla necessitatibus, harum nesciunt eveniet, eligendi quidem laudantium sit ipsam, fugit provident!"
    ]
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
    
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
