<?php


namespace App\Domain\Languages\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class LanguageDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
    /* @var string|null */
public $name;
	/* @var string|null */
public $abbrev;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'name' 					=> $request['name'] ?? null ,
			'abbrev' 					=> $request['abbrev'] ?? null ,

        ]);
    }
}
