<?php

namespace App\Services;

use App\Repositories\Contracts\ProfileRepositoryContract;

class ProfileService
{
    private $profileRepository;

    public __construct(ProfileRepositoryContract $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }
}