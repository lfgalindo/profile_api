<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    public function profile(): object
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'id');
    }
}
