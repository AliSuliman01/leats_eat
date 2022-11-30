<?php


namespace App\Http\ViewModels\Currencies\CurrencyTranslations;

use App\Domain\Currencies\CurrencyTranslations\Model\CurrencyTranslation;
use Illuminate\Contracts\Support\Arrayable;


class GetCurrencyTranslationVM implements Arrayable
{

    private $currency_translation;

    public function __construct($currency_translation)
    {
        $this->currency_translation = $currency_translation;
    }

    public function toArray()
    {
        return  $this->currency_translation;
    }
}
