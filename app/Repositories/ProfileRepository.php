<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Repositories\Contracts\ProfileRepositoryContract;

class ProfileRepository implements ProfileRepositoryContract
{
    public function find(int $id): ?object
    {
        return Profile::find($id);
    }
}
