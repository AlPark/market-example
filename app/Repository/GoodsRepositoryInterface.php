<?php

namespace App\Repository;

use Illuminate\Support\Collection;

interface GoodsRepositoryInterface
{
    public function findAll(): Collection|null;
}
