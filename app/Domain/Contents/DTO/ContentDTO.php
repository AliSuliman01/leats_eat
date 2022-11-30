<?php


namespace App\Domain\Contents\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class ContentDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,

        ]);
    }
}
