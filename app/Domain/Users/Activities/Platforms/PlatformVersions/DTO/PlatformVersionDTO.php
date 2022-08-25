<?php


namespace App\Domain\Users\Activities\Platforms\PlatformVersions\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class PlatformVersionDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
    /* @var integer|null */
public $platform_id;
	/* @var string|null */
public $version;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'platform_id' 					=> $request['platform_id'] ?? null ,
			'version' 					=> $request['version'] ?? null ,

        ]);
    }
}
