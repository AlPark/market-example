<?php

namespace App\Dto;

class GoodsListDto
{
    public function __construct(
        public int $id,
        public string $title,
        public string $price,
    )
    {

    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
        ];
    }
}
