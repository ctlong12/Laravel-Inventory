<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
        
        // DB::table('users')->insert([
        // 'name' => Str::random(10),
        // 'email' => Str::random(10).'@gmail.com',
        // 'password' => bcrypt('password'),
        //        ]);
        
        //factory(App\User::class, 50)->create();
        
    }
}
