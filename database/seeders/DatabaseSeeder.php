<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        $category = new Category();
//        $category->title = "Noves tecnologies";
//        $category->url_clean = "noves_tecnologies";
//        $category->start_date = "2024-09-15";
//        $category->end_date = "2024-09-15";
//        $category->save();

        $this->call(CategorySeeder::class);

        $AdminUser = new User();
        $AdminUser->name = "Maximo";
        $AdminUser->email = "maxfernandez@gmail.com";
        $AdminUser->role = "superjefetop";
        $AdminUser->password = Hash::make('12345678');
        $AdminUser->save();

        User::factory(5)->create();
        Post::factory(5)->create();

        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
