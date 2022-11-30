<?php


namespace App\Http\ViewModels\Currencies\Currencies;

use App\Domain\Currencies\Currencies\Model\Currency;
use Illuminate\Contracts\Support\Arrayable;


class GetCurrencyVM implements Arrayable
{

    private $currency;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function toArray()
    {
        return  $this->currency;
    }
}
