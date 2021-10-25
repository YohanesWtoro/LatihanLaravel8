<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(15)->create();

        /* User::create([
            'name' => 'Yohanes',
            'email' => 'yohanes@gmail.com',
            'password' => 'bcrypt(123)'
        ]);

        User::create([
            'name' => 'Widiyantoro',
            'email' => 'Widiyantoro@gmail.com',
            'password' => 'bcrypt(456)'
        ]); */

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Life and Style',
            'slug' => 'life-and-style'
        ]);

        Category::create([
            'name' => 'Tips and Trick',
            'slug' => 'tips-and-trick'
        ]);


        // /* Post::create([
        //     'title' =>'Judul Pertama',
        //     'slug'  =>'judul-pertama',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti nostrum, dolorem voluptatum vel praesentium quod alias omnis, fugit dolore eos veniam saepe id natus. Vitae, magni omnis.',
        //     'body'  =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti nostrum, dolorem voluptatum vel praesentium quod alias omnis, fugit dolore eos veniam saepe id natus. Vitae, magni omnis. Sapiente reprehenderit, officiis provident placeat dolorem nesciunt eos consectetur, voluptatem quidem aliquid, ad laboriosam maxime. Possimus cumque voluptas sed praesentium unde qui quo aliquid eius exercitationem est doloribus amet ducimus nihil, impedit velit consectetur obcaecati cupiditate reprehenderit odio inventore culpa corrupti quaerat magni! Et adipisci doloribus, ex numquam, nam consequuntur sequi voluptates doloremque iure ducimus tempore quam repellendus culpa minima minus autem omnis commodi fugit? Ipsum quod laborum officia reprehenderit sunt veritatis?</p>',
        //     'category_id'=> 1,
        //     'user_id'=> 1,
        // ]);

        // Post::create([
        //     'title' =>'Judul Kedua',
        //     'slug'  =>'judul-kedua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti nostrum, dolorem voluptatum vel praesentium quod alias omnis, fugit dolore eos veniam saepe id natus. Vitae, magni omnis.',
        //     'body'  =>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis vel iste quod illum. Molestias nulla quo, soluta iure odit minima, id ex maiores repudiandae aperiam expedita? Laboriosam dolor voluptate repellat officiis ipsam asperiores quibusdam labore, amet aliquid, vel debitis eveniet culpa nulla velit quas aliquam voluptatibus.</p><p> Quos a exercitationem reiciendis veniam debitis numquam blanditiis ipsa! Aperiam rem possimus ad ipsam sequi velit nemo quisquam saepe illo officia maiores vel qui molestiae iure eligendi, commodi ex placeat odio hic repudiandae. Exercitationem voluptas, tempora ipsum cum eos laudantium quod minus hic ad id voluptate harum. Itaque ipsum aspernatur voluptatem possimus fugiat nam reiciendis eius dolore libero praesentium molestiae eligendi, maxime provident expedita sapiente! Veniam rerum esse dicta placeat ducimus officia laborum, nam alias, commodi quia nesciunt? Atque tempora sequi suscipit beatae magnam dolor temporibus eveniet veniam consectetur non reprehenderit culpa eos dolores recusandae, aut facere vel similique ullam. Quos quaerat nam dolorem!</p>',
        //     'category_id'=>1,
        //     'user_id'=>1,
        // ]);

        // Post::create([
        //     'title' =>'Judul Ketiga',
        //     'slug'  =>'judul-ketiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti nostrum, dolorem voluptatum vel praesentium quod alias omnis, fugit dolore eos veniam saepe id natus. Vitae, magni omnis.',
        //     'body'  =>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis voluptate magnam enim itaque reiciendis, iure nisi dicta accusamus quia ex aliquam! Voluptatum odio nam voluptatem recusandae cumque sequi nobis? Sint soluta eius distinctio laudantium fugit, tempora, repellat placeat quo necessitatibus veritatis expedita nemo?</p><p> Sapiente adipisci eaque possimus architecto maiores perferendis quae sequi, exercitationem illo officiis impedit dolorem neque odio sint alias, consequuntur eius beatae quos illum quibusdam sed nemo accusamus culpa amet! Nemo labore architecto iure obcaecati. Ut, vitae? Corrupti impedit voluptatum nobis ratione, aliquid ipsa perferendis.</p><p> Ratione tempore minus quia quos, commodi ipsum deserunt eos velit. Maxime minima perspiciatis a alias ex veritatis doloribus eaque reiciendis minus eveniet atque, asperiores id sequi iusto provident fugit libero possimus enim sapiente recusandae in debitis voluptatibus tempore optio. Numquam aperiam nemo tempore eum nostrum dolor, quidem asperiores nesciunt! Temporibus assumenda hic ducimus perferendis voluptatem! Deserunt nemo, similique repudiandae eius reiciendis aliquam molestias nihil placeat a? Recusandae est perspiciatis in quaerat unde obcaecati! Ex quae, unde consectetur magnam harum blanditiis nulla in labore officiis veniam delectus tempora fugit? Enim, odio magnam labore dolorem nam, autem cupiditate nulla sapiente impedit, magni tempore doloribus? Inventore ullam laborum odio nobis voluptatum minima pariatur mollitia fugiat est?</p>',
        //     'category_id'=>2,
        //     'user_id'=>1,
        // ]);        

        // Post::create([
        //     'title' =>'Judul Keempat',
        //     'slug'  =>'judul-keempat',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam corrupti nostrum, dolorem voluptatum vel praesentium quod alias omnis, fugit dolore eos veniam saepe id natus. Vitae, magni omnis.',
        //     'body'  =>'<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, natus. Voluptate ullam voluptatum aut culpa quam, maiores saepe, at provident, iusto ipsa quia nobis! Deserunt cupiditate aut repellat recusandae laudantium id accusamus, qui accusantium ipsa molestias quidem omnis alias distinctio perspiciatis a nisi sed.</p><p> Architecto debitis ad amet odio aliquam velit suscipit sunt quas ratione nobis numquam aut consequatur veniam saepe, enim doloribus tempore, libero voluptatibus eaque quia! Eaque, nesciunt ut aliquam ducimus, omnis est vitae sapiente repudiandae fugit soluta optio autem tempore non sequi vel quam velit neque dicta rerum quia expedita laboriosam?</p><p> Ipsam perspiciatis officiis optio odio non tenetur deserunt sunt eveniet, reprehenderit delectus quos at consequuntur illum assumenda voluptas tempore beatae. Voluptatum explicabo temporibus maiores consequatur, nostrum itaque minima, numquam nesciunt blanditiis repudiandae cupiditate amet maxime neque molestiae dignissimos sit facere! Velit nemo mollitia inventore ipsum molestias dolor saepe, voluptatibus aliquid incidunt dolorem aperiam, facere at quis natus nisi blanditiis commodi odit exercitationem nihil nulla? Magni accusamus, optio laborum consequatur sint accusantium sed dicta quibusdam sequi eos dolorem unde placeat tempore reprehenderit! Non aliquid quidem harum consequatur in reprehenderit similique praesentium, sapiente alias quasi velit minus deleniti illo vitae, nobis id.</p><p> Nemo ratione dolore neque error, cum illum deleniti voluptatum. Voluptates quas sit dicta atque dolorem vel praesentium impedit dolorum doloremque numquam corrupti provident, commodi itaque culpa tempora porro nostrum natus dignissimos inventore qui odio adipisci velit. Vitae commodi cumque alias ab nihil ratione, minus, ex ipsam enim, veritatis earum! Quibusdam temporibus quis nemo non obcaecati tempora!</p>',
        //     'category_id'=>3,
        //     'user_id'=>2, */
        // ]);


        

        
    }
}
