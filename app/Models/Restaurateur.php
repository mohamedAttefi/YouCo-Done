<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurateur extends User
{
    protected $table = 'users';
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class, 'user_id', 'id');
    }
}
