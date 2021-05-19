<?php

namespace App\Repositories\Contracts;

interface GameRepositoryContract
{
    public function find(string $id): object;

    public function store(object $game): bool;
}
