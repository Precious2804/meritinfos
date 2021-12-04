<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'id'=>rand(1000000, 9999999),
            'name'=>"Admin",
            'email'=>"anipreciousebuka@gmail.com",
            'password'=>Hash::make('admin'),
            'isAdmin'=>"1"
        ]);
    }
}
