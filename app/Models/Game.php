<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function profiles(): object
    {
        return $this->belongsToMany(Profile::class, 'games_profiles', 'game_id', 'profile_id');
    }
}
