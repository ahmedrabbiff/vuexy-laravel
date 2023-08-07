<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $adminPermissions = Permission::all();
    Role::updateOrCreate([
      "name" => "System Admin",
      "slug" => "system-admin",
      "deletable" => false,
    ])
      ->permissions()
      ->sync($adminPermissions->pluck("id"));
      
    Role::updateOrCreate([
      "name" => "User",
      "slug" => "user",
      "deletable" => false,
    ]);
  }
}
