<?php

namespace Database\Seeders;

use Database\Factories\ArticleFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        UserFactory::new()->count(10)->create();
        ArticleFactory::new()->count(5)->create();
    }
}
