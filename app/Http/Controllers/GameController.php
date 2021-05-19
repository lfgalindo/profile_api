<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\GameRepositoryContract;

class GameController extends Controller
{
    private $gameRepository;

    public function __construct(GameRepositoryContract $gameRepository)
    {
        $this->gameRepository = $gameRepository;
    }

    public function show(string $id)
    {
        dd($this->gameRepository->find($id));
    }
}
