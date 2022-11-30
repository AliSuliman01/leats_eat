<?php


namespace App\Domain\Currencies\CurrencyTranslations\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class CurrencyTranslationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var string|null */
	public $language_code;
	/* @var integer|null */
	public $currency_id;
	/* @var string|null */
	public $name;
	/* @var string|null */
	public $description;
	/* @var string|null */
	public $notes;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'language_code'				=> $request['language_code'] ?? null ,
			'currency_id'				=> $request['currency_id'] ?? null ,
			'name'				=> $request['name'] ?? null ,
			'description'				=> $request['description'] ?? null ,
			'notes'				=> $request['notes'] ?? null ,

        ]);
    }
}
