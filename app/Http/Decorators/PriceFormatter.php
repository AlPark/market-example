<?php

namespace App\Http\Decorators;

interface PriceFormatter
{
    public function formatPrice(string $price): string;
}
