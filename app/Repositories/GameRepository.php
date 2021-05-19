<?php

namespace App\Repositories;

use App\Models\Game;
use App\Repositories\Contracts\GameRepositoryContract;

class GameRepository implements GameRepositoryContract
{
    private $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function find(string $id): object
    {
        return $this->game->find($id);
    }

    public function store(object $game): bool
    {
        $this->game = $game;

        return $this->game->save();
    }
}
