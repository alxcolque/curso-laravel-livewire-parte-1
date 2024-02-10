<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    static $posts = [
        'Images',
        'News',
        'Videos'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$posts as $post) {
            DB::table('posts')->insert([
                'title' => $post
            ]);
        }
    }
}
