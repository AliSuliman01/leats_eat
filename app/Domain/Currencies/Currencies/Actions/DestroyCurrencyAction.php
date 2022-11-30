<?php


namespace App\Domain\Currencies\Currencies\Actions;


use App\Domain\Currencies\Currencies\Model\Currency;

class DestroyCurrencyAction
{
    public static function execute(
        Currency $currency
    ){
        $currency->delete();
        return $currency;
    }
}
