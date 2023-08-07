<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::updateOrCreate([
      "name" => "Admin",
      "role_id" => Role::where("slug", "system-admin")->first()->id,
      "email" => "admin@mail.com",
      "password" => Hash::make("123456"),
    ]);
  }
}
