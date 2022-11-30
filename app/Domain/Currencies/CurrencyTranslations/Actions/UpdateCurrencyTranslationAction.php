<?php

namespace App\Domain\Currencies\CurrencyTranslations\Actions;

use App\Domain\Currencies\CurrencyTranslations\DTO\CurrencyTranslationDTO;
use App\Domain\Currencies\CurrencyTranslations\Model\CurrencyTranslation;

class UpdateCurrencyTranslationAction
{

    public static function execute(
        CurrencyTranslation $currency_translation,CurrencyTranslationDTO $currency_translationDTO
    ){
        $currency_translation->update(array_null_filter($currency_translationDTO->toArray()));
        return $currency_translation;
    }
}
