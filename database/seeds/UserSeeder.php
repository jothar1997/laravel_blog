<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new User;
      $user->name = "jothar";
      $user->email = "jothar123@gmail.com";
      $user->password = Hash::make('password');
      $user->save();
    }
}
