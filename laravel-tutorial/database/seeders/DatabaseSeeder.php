<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Article;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Article::factory(20)->create();
        // diatas untuk generate 10 data palsu atau random
        // User::create([
        //     'name' => 'Aristya',
        //     'email' => 'arisss@its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Wijaya',
        //     'email' => 'jayawijaya@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Akang',
        //     'email' => 'Akang@mhs.its.ac.id',
        //     'password' => bcrypt('123')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Analisis Algoritma',
            'slug' => 'analisis-algoritma'
        ]);

        Category::create([
            'name' => 'Catatan Harian',
            'slug' => 'catatan-harian'
        ]);

        // Article::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'body' => 'Lorem, ipsum bnvmn ssbdx doommodi molestias, quis nvchbvmbcbvhd vmcbvchjbjhvz,dkjaiuhimdcnv ncx vnn jncvj bjdbf tenetur sint culpa!',
        //     'excerpt' => '<b>Lorem IS ? </b> kdjdsgfdsvfg hgsdhsgfvdbnf dfbfhd hdfhdbv  sugfvhz.'
        // ]);

        // Article::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'body' => 'Hai Lorem, ipsum bnvmn ssbdx doommodi molestias, quis nvchbvmbcbvhd vmcbvchjbjhvz,dkjaiuhimdcnv ncx vnn jncvj bjdbf tenetur sint culpa!',
        //     'excerpt' => '<b> Hai you Lorem IS ? </b> kdjdsgfdsvfg hgsdhsgfvdbnf dfbfhd hdfhdbv  sugfvhz.'
        // ]);

        // Article::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'body' => '<b>Lorem</b>, ipsum bnvmn ssbdx doommodi molestias, quis nvchbvmbcbvhd vmcbvchjbjhvz,dkjaiuhimdcnv ncx vnn jncvj bjdbf tenetur sint culpa!',
        //     'excerpt' => 'Lorem IS ?  kdjdsgfdsvfg hgsdhsgfvdbnf dfbfhd hdfhdbv  sugfvhz.'
        // ]);

        // Article::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'body' => '<b>Heelo guys Lorem IS ? </b> Hello. Lorem, ipsum bnvmn ssbdx doommodi molestias, quis nvchbvmbcbvhd vmcbvchjbjhvz,dkjaiuhimdcnv ncx vnn jncvj bjdbf tenetur sint culpa!',
        //     'excerpt' => 'kdjdsgfdsvfg hgsdhsgfvdbnf dfbfhd hdfhdbv  sugfvhz.'
        // ]);


    }
}
