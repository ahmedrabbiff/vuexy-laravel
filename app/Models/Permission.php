<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PermissionGroup;
use App\Models\Role;

class Permission extends Model
{
  use HasFactory;
  protected $guarded = ["id"];
  
  public function permissionGroup()
  {
    return $this->belongsTo(PermissionGroup::class);
  }
  public function roles()
  {
    return $this->belongsToMany(Roles::class);
  }
}
