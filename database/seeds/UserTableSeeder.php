<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  $role_user = Role::where('name', 'user')->first();
      //  $role_admin = Role::where('name' , 'admin')->first();


      $user = new User();

      $user->name = "Santiago";
      $user->email = "sanvalenciaarango@gmail.com";
      $user->password = bcrypt("santii14");
      $user-> save();
    }
}
