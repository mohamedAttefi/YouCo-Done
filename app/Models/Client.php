<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends User
{
        public function favorites()
    {
        return $this->hasOne(Favorit::class, 'favorites');
    }
}
