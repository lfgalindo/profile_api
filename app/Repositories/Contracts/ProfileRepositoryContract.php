<?php

namespace App\Repositories\Contracts;

interface ProfileRepositoryContract
{
    public function find(int): ?object;
}
