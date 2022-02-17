<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
              'name' => 'テストユーザ',
              'email' => 'test@gmail.com',
              'password' => 'testuser',
            ],
            
            ]);
    }
}
