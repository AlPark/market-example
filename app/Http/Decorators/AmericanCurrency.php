<?php

namespace App\Http\Decorators;

use Illuminate\Support\Number;

class AmericanCurrency implements PriceFormatter
{
    public string $locale = 'en';

    public string $location = 'left';

    public string $sign = '$';

    public int $rate = 90;


    public function formatPrice(string $price): string
    {
        return $this->sign . Number::format($price / $this->rate, 2, 2, $this->locale);
    }
}
