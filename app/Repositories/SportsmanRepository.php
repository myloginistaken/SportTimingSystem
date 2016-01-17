<?php
namespace App\Repositories;

use App\Sportsman;

class SportsmanRepository
{

    public function getSportsmen()
    {
        return Sportsman::orderBy('created_at', 'asc')->get();
    }
}