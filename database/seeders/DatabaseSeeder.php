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

        $service1 = \App\Models\Service::create([
            'name'=>"Website Development"
        ]);
        $service2 = \App\Models\Service::create([
            'name'=>"Mobile Development"
        ]);
        $service3 = \App\Models\Service::create([
            'name'=>"Branding Services"
        ]);
        $service4 = \App\Models\Service::create([
            'name'=>"Digital Marketing"
        ]);
        $service5 = \App\Models\Service::create([
            'name'=>"Content Management"
        ]);
        $service6 = \App\Models\Service::create([
            'name'=>"Blockchain Technology"
        ]);
        $service7 = \App\Models\Service::create([
            'name'=>"Financial Technology"
        ]);
    }
}
