<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\UserType;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $user = User::create([
            'username' => 'Test User',
            'email' => 'user@user.com',
            'usertype'=>UserType::READER->value,
            'biography'=>'Sample Only',
            'password'=>Hash::make('password')
        ]);

        for($i=0; $i<=5; $i++)
        {
            $user->followingUser()->attach(User::inRandomOrder()->first()->id);
        }

        for($i=0; $i<=5; $i++)
        {
            $user->followerUser()->attach(User::inRandomOrder()->first()->id);
        }

        Group::factory(5)->create();


        $genre =[
            'Romance',
            'Action',
            'Comedy',
            'Horror'
        ];

        foreach($genre as $g){
            Genre::create([
                'title'=>$g
            ]);
        }

        
        $category =[
            'Novel',
            'Short Story'
        ];

        foreach($category as $c){
            Category::create([
                'title'=>$c
            ]);
        }

        // Book::factory(20)->create();
        // Group::factory(20)->create();
    }
}
