<?php

namespace App\Domain\Currencies\Currencies\Actions;

use App\Domain\Currencies\Currencies\DTO\CurrencyDTO;
use App\Domain\Currencies\Currencies\Model\Currency;

class UpdateCurrencyAction
{

    public static function execute(
        Currency $currency,CurrencyDTO $currencyDTO
    ){
        $currency->update(array_null_filter($currencyDTO->toArray()));
        return $currency;
    }
}
