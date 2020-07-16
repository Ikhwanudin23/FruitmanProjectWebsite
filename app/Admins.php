<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    protected $guard = 'admin';
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
