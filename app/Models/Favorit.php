<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    protected $fillable = ['user_id', 'restaurant_id'];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
