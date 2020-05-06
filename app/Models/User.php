<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        "nik",
        "name",
        "role_name",
    ];

    protected $hidden = [
        "created_by",
        "created_at",
        "updated_by",
        "updated_at"
    ];
}
