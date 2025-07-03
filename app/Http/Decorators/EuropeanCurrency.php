<?php

namespace App\Http\Decorators;

use Illuminate\Support\Number;

class EuropeanCurrency implements PriceFormatter
{
    public string $locale = 'en';

    public string $location = 'left';

    public string $sign = '€';

    public int $rate = 100;

    public function formatPrice(string $price): string
    {
        return $this->sign . Number::format($price / $this->rate, 2, 2, $this->locale);
    }
}
