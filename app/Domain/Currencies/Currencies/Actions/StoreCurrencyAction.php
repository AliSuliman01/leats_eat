<?php


namespace App\Domain\Currencies\Currencies\Actions;


use App\Domain\Currencies\Currencies\DTO\CurrencyDTO;
use App\Domain\Currencies\Currencies\Model\Currency;

class StoreCurrencyAction
{
    public static function execute(
    CurrencyDTO $currencyDTO
    ){

        return Currency::create(array_null_filter($currencyDTO->toArray()));
    }
}
