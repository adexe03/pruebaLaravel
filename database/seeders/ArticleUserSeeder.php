<?php

namespace Database\Seeders;

use App\Models\ArticleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles_users = [
            ['user_id' => 2, 'article_id' => 1],
            ['user_id' => 2, 'article_id' => 3],
            ['user_id' => 3, 'article_id' => 2],
            ['user_id' => 3, 'article_id' => 3],
        ];

        ArticleUser::insert($articles_users);
    }
}
