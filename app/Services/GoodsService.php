<?php

namespace App\Services;

use App\Dto\GoodsListDto;
use App\Repository\GoodsRepositoryInterface;

class GoodsService implements GoodsServiceInterface
{
    public function __construct(
        protected GoodsRepositoryInterface $goodsRepository,
    )
    {
    }

    /**
     * @param string|null $currency
     * @return array<GoodsListDto>
     */
    public function getGoods(?string $currency = null): array
    {
        $result = [];


        $goods = $this->goodsRepository->findAll();
        if ( !empty($goods) ) {
            $priceProcessor = new PriceProcessor();
            $goods->each(function($good) use (&$result, $currency, $priceProcessor) {

                $result[] = new GoodsListDto(
                    $good['id'],
                    $good['title'],
                    $priceProcessor->format($good['price'], $currency),
                );
            });
        }

        return $result;
    }
}
