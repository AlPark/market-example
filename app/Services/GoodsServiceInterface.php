<?php

namespace App\Services;

use App\Dto\GoodsListDto;

interface GoodsServiceInterface
{
    /**
     * @param string|null $currency
     * @return array<GoodsListDto>
     */
    public function getGoods(?string $currency): array;
}
