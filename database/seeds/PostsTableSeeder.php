<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\Post::class, 50)->create();
        
//        DB::table('users')->insert([
//        'title' => Str::random(10),
//        'body' => Str::random(10),
//        'highlighted' => 1,
//        'created_at' => '9/12/18',
//        'created_at' => '9/12/19', 
//            
//        ]);
    }
}
