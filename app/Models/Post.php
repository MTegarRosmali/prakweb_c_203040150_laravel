<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Tegar",
            "slug" => "judul-post-pertama",
            "author" => "M.Tegar Nurul Fuad Rosmali",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nisi nostrum laudantium natus provident nesciunt, distinctio est esse dolores, error unde voluptatibus voluptates repellat qui porro eveniet rerum, sunt mollitia. Magnam sed excepturi cupiditate asperiores dolorum possimus rem nobis aliquid minima maiores hic laboriosam ab repudiandae ut, totam voluptatem, doloribus tempora exercitationem molestiae ipsum veniam! Laboriosam, eius veniam? Libero sed architecto laudantium voluptates quibusdam odio, soluta voluptas fugiat enim maxime unde quisquam earum accusamus provident ipsam delectus impedit, modi similique?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, obcaecati voluptas quas quasi eligendi sint praesentium consequuntur pariatur reprehenderit doloribus accusamus inventore incidunt maxime eaque autem, consectetur animi repudiandae. Quia eos pariatur provident reiciendis? Numquam eius laudantium architecto accusamus. Veritatis illum iure, alias harum quas laudantium, odio, est delectus repellat esse error ipsum rerum incidunt nam exercitationem asperiores. Sed dolores adipisci vel nesciunt rerum laborum reprehenderit, rem fuga delectus ratione saepe! Id magni rem in iure dignissimos provident nostrum omnis, error incidunt reprehenderit reiciendis distinctio amet. Cumque ea, repellat similique assumenda obcaecati laboriosam perspiciatis corporis amet dolores hic, quod quaerat."
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
