<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['user_id', 'name', 'city', 'address', 'cuisine_type', 'capacity', 'opening_time', 'closing_time', 'description', 'is_deleted', 'is_active'];
    public function favorites()
    {
        return $this->hasMany(Favorit::class, 'favorites');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function restaurateur()
    {
        return $this->belongsTo(Restaurateur::class);
    }

        public function photos()
    {
        return $this->morphMany(Photo::class, 'imageable');
    }
}
