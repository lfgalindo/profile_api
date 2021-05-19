<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileType extends Model
{
    protected $table = 'profiles_types';

    public function profiles(): object
    {
        return $this->hasMany(Profile::class, 'type_id', 'id');
    }
}
