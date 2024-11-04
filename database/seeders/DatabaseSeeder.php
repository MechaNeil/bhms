<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Greeting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * When starting seeding new data to the data base you can
     * either delete the items below or run php artisan db:wipe to 
     * wipe the database and php artisan migrate then 
     * php artisan db:seed to seed the data to the database
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Greeting::create(['greeting' => 'Hello!']);
        // Greeting::create(['greeting' => 'Hi!']);
        // Greeting::create(['greeting' => 'Hey!']);
        // Greeting::create(['greeting' => 'Howdy!']);

        Article::factory()
            ->count(50)
            ->create();
    

    }
}
