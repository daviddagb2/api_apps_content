<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Post;
use App\ProjectCategory;
use App\PostCategory;


class TestPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Post::create([
            'title' => 'Lorem ipsun sit dolor amnet no se que',
            'content' => 'Laborum dolor commodo irure culpa amet id laboris ex duis ut amet commodo nulla. Eu aliqua culpa reprehenderit magna deserunt officia excepteur consectetur enim ad voluptate officia. Fugiat pariatur sint do ad aliqua id voluptate commodo aute amet voluptate. Culpa ullamco anim excepteur elit dolor magna sint nisi officia ullamco commodo incididunt aliqua. Officia ullamco enim nisi do.',
            'url_picture' => 'picture.png',
            'active'  => true,
            'post_type_id' => 1,
            'user_id' => 1, 
        ]);


        Post::create([
            'title' => 'Sint veniam mollit ipsum cillum nisi consectetur sunt fugiat aliquip mollit aute exercitation.',
            'content' => 'Exercitation voluptate Lorem do elit nisi exercitation excepteur velit irure dolor ex sint. Voluptate incididunt fugiat ipsum deserunt mollit. Duis ad amet irure esse laboris sit eu.',
            'url_picture' => 'picture.png',
            'active'  => true,
            'post_type_id' => 1,
            'user_id' => 1, 
        ]);


        Post::create([
            'title' => 'Qui et amet enim ex officia.',
            'content' => 'Reprehenderit ut sint adipisicing tempor nostrud elit occaecat nisi enim enim consectetur ex non. Amet ea culpa in in irure consectetur. Officia quis mollit magna Lorem do amet sit. Cupidatat anim anim eu aliqua ut amet labore excepteur dolor Lorem. Aute commodo ea nostrud magna aliqua excepteur exercitation minim irure. Dolor ut id do amet magna commodo ea excepteur voluptate consequat aute laboris ad. Sit enim fugiat labore elit ad aliqua deserunt minim minim.',
            'url_picture' => 'picture.png',
            'active'  => true,
            'post_type_id' => 1,
            'user_id' => 1, 
        ]);


        PostCategory::create([
            'post_id' => 1,
            'category_id' => 1,
        ]);

        
    }
}
