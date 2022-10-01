<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'name',
        'role_id',
        'is_active',
    ];

    public static function serve()
    {
        return self::join('roles', 'users.role_id', 'roles.id')
            ->select('users.*', 'roles.name as role_name')
            ->get();
    }
}
