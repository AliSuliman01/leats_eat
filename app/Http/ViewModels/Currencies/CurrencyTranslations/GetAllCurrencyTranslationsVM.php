<?php


namespace App\Http\ViewModels\Currencies\CurrencyTranslations;

use App\Domain\Currencies\CurrencyTranslations\Model\CurrencyTranslation;
use Illuminate\Contracts\Support\Arrayable;

class GetAllCurrencyTranslationsVM implements Arrayable
{
    public function toArray()
    {
        return CurrencyTranslation::query()->get();
    }
}
