<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function games(): object
    {
        return $this->belongsToMany(Game::class, 'games_profiles', 'profile_id', 'game_id');
    }

    public function tips(): object
    {
        return $this->hasMany(Tip::class, 'profile_id', 'id');
    }
}
