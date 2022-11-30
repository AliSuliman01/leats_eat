<?php


namespace App\Domain\Currencies\CurrencyTranslations\Actions;


use App\Domain\Currencies\CurrencyTranslations\Model\CurrencyTranslation;

class DestroyCurrencyTranslationAction
{
    public static function execute(
        CurrencyTranslation $currency_translation
    ){
        $currency_translation->delete();
        return $currency_translation;
    }
}
