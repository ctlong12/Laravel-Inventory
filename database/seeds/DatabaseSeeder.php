<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    
    /**
     *  Run the database
     * 
     *  @return void
     */
    
    public function run() 
    {
        
        $this->call(UserTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        
        
        // DB::table('users')->insert([
        // 'name' => Str::random(10),
        // 'email' => Str::random(10).'@gmail.com',
        // 'password' => bcrypt('password'),
        //        ]);
        
        //factory(App\User::class, 50)->create();
        
        
    }
}
