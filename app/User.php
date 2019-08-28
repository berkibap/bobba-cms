<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username', 'password', 'mail', 'rank', 'credits', 'pixels', 'points', 'motto', 'look', 'gender', 'online', 'auth_ticket', 'machine_id', 'ip_register', 'ip_current', 'home_room', 'pin'
    ];
}
