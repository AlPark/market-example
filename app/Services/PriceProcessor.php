<?php

namespace App\Services;

use App\Http\Decorators\AmericanCurrency;
use App\Http\Decorators\EuropeanCurrency;
use App\Http\Decorators\PriceFormatter;
use App\Http\Decorators\RussianCurrency;

class PriceProcessor
{
    private array $currencies;
    public function __construct(
    )
    {
        $this->currencies = [
            'RUB' => RussianCurrency::class,
            'USD' => AmericanCurrency::class,
            'EUR' => EuropeanCurrency::class,
        ];
    }

    public function format(string $price, string $currency): string
    {
        $currency = new $this->currencies[$currency];
        if($currency instanceof PriceFormatter) {
            return $currency->formatPrice($price);
        }

        return '';
    }
}
