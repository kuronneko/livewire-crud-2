<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     *
     *
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
