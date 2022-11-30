<?php


namespace App\Domain\Currencies\Currencies\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CurrencyDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var string|null */
	public $code;
	/* @var double|null */
	public $equivalent_to_main_currency;
	/* @var integer|null */
	public $is_main;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'code'				=> $request['code'] ?? null ,
			'equivalent_to_main_currency'				=> $request['equivalent_to_main_currency'] ?? null ,
			'is_main'				=> $request['is_main'] ?? null ,

        ]);
    }
}
