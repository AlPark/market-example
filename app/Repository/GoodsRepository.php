<?php

namespace App\Repository;

use App\Models\Good;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class GoodsRepository implements GoodsRepositoryInterface
{

    public function findAll(): Collection|null
    {
//        return Good::query()->get();
        $file = File::get(storage_path('app/public/goods_list.json'));
        $goods = json_decode($file, true);
        return collect($goods);
    }
}
