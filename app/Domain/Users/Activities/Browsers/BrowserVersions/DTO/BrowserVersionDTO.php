<?php


namespace App\Domain\Users\Activities\Browsers\BrowserVersions\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class BrowserVersionDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
    /* @var integer|null */
public $browser_id;
	/* @var string|null */
public $version;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'browser_id' 					=> $request['browser_id'] ?? null ,
			'version' 					=> $request['version'] ?? null ,

        ]);
    }
}
