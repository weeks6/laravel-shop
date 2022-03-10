<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    use HasFactory;

    protected $fillable = ['title'];

    public static function default_role()
    {
        return 1;
    }

    public static function admin_role()
    {
        return 2;
    }
}
