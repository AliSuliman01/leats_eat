<?php


namespace App\Domain\Currencies\CurrencyTranslations\Actions;


use App\Domain\Currencies\CurrencyTranslations\DTO\CurrencyTranslationDTO;
use App\Domain\Currencies\CurrencyTranslations\Model\CurrencyTranslation;

class StoreCurrencyTranslationAction
{
    public static function execute(
    CurrencyTranslationDTO $currency_translationDTO
    ){

        return CurrencyTranslation::create(array_null_filter($currency_translationDTO->toArray()));
    }
}
