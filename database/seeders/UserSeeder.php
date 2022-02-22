<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\blog;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
       ['name'=>'sojol','email'=>'sojol@gmail.com','des'=>'hi this is sojol'],
       ['name'=>'sojol','email'=>'sojol@gmail.com','des'=>'hi this is sojol'],
       ['name'=>'sojol','email'=>'sojol@gmail.com','des'=>'hi this is sojol'],

        ];
        blog::insert($posts);
    }
}
