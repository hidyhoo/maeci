<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $fillable = [
        'PPR', 'email', 'password',
    ];

    protected $hidden = [
        'password', 
    ];

    // Additional methods, relationships, etc. can go here
}
