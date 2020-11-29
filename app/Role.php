<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as DefaultRole;
use Illuminate\Database\Eloquent\Model;

class Role extends DefaultRole
{
    use HasFactory;
}
