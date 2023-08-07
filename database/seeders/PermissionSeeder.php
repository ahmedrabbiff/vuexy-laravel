<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\PermissionGroup;

class PermissionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $groupAdminDashboard = PermissionGroup::updateOrCreate([
      "name" => "Access Admin Dashboard",
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupAdminDashboard->id,
      "name" => "Access Admin Dashboard",
      "slug" => "app.admin-dashboard.index"
    ]);
    $groupRoleManagement = PermissionGroup::updateOrCreate([
      "name" => "Role Management",
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupRoleManagement->id,
      "name" => "Access Role Management",
      "slug" => "app.role-management.index"
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupRoleManagement->id,
      "name" => "Create Role",
      "slug" => "app.role-management.create"
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupRoleManagement->id,
      "name" => "Update Role",
      "slug" => "app.role-management.update"
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupRoleManagement->id,
      "name" => "Delete",
      "slug" => "app.role-management.delete"
    ]);
    $groupPermissionManagement = PermissionGroup::updateOrCreate([
      "name" => "Permission Management",
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupPermissionManagement->id,
      "name" => "Access Permission Management",
      "slug" => "app.permission-management.index"
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupPermissionManagement->id,
      "name" => "Create Permission",
      "slug" => "app.permission-management.create"
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupPermissionManagement->id,
      "name" => "Update Permission",
      "slug" => "app.permission-management.update"
    ]);
    Permission::updateOrCreate([
      "permission_group_id" => $groupPermissionManagement->id,
      "name" => "Delete Permission",
      "slug" => "app.permission-management.delete"
    ]);
  }
}
