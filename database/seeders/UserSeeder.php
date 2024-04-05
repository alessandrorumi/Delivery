<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Type;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User :: factory() 
             -> count(25) 
             -> create()
             -> each(function($user) {

                $types = Type::inRandomOrder() -> limit(rand(1,3)) -> get();
                $user -> types() -> attach($types);
             });
    }
}
