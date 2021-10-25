<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
    [
        "title"     => "Judul Post Pertama",
        "slug"      => "judul-post-pertama",
        "author"    => "Yoh",
        "body"      => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consectetur itaque et. Impedit iusto, ducimus porro commodi ipsam possimus? Saepe neque qui similique ea nihil, natus illo ullam quam temporibus consectetur officiis alias, cumque commodi. Asperiores, quisquam quis quo dignissimos distinctio expedita explicabo veritatis voluptates laboriosam ut, iste nihil. Similique at, deleniti nihil quae veniam dicta dignissimos cum perspiciatis in sit, rem ea. Nesciunt quod repellendus, iure ut provident quis in laborum aliquid sed nostrum dicta tempore aperiam excepturi eos eveniet totam tenetur esse! Dolor expedita adipisci quibusdam distinctio deleniti!."
        ],
        [
        "title"     => "Judul Post Kedua",
        "slug"      => "judul-post-kedua",
        "author"    => "Nes",
        "body"      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis ipsum voluptate, impedit reiciendis, doloremque nam neque ullam, laboriosam saepe dolorem molestiae. Eius rerum quasi nam doloribus ad facilis rem est aliquam voluptas eum error tempora ut adipisci exercitationem, itaque eaque saepe unde excepturi id quae amet aspernatur assumenda possimus quaerat? Alias voluptate neque sunt ipsa, temporibus iste delectus laborum. Dolore, repudiandae! Molestiae culpa quae dolorem laudantium recusandae? Totam eius eveniet molestias inventore blanditiis sed quo vitae, quisquam eaque. Odio adipisci dolorem culpa vel optio, voluptates tempora sint praesentium, facilis quod amet id est ipsa officia vero explicabo possimus sunt voluptas?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
        }

    public static function find($slug){
        $posts = static::all();
        
        return $posts->firstWhere('slug',$slug);
    }
}
