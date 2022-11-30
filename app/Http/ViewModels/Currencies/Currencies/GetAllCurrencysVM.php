<?php


namespace App\Http\ViewModels\Currencies\Currencies;

use App\Domain\Currencies\Currencies\Model\Currency;
use Illuminate\Contracts\Support\Arrayable;

class GetAllCurrencysVM implements Arrayable
{
    public function toArray()
    {
        return Currency::query()->get();
    }
}
