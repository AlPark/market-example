<?php

namespace App\Http\Decorators;

use Illuminate\Support\Number;

class RussianCurrency implements PriceFormatter
{
    public string $locale = 'sv';

    public string $location = 'right';

    public string $sign = '₽';

    public function formatPrice(string $price): string
    {
        return Number::format($price, 2, 2, $this->locale) . $this->sign;
    }
}
