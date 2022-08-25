<?php


namespace App\Domain\Users\Activities\Browsers\Browsers\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class BrowserDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
    /* @var string|null */
public $name;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'name' 					=> $request['name'] ?? null ,

        ]);
    }
}
