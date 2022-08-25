<?php


namespace App\Domain\Users\Activities\ActivityLogTables\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class ActivityLogTableDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
    /* @var string|null */
public $table_name;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'table_name' 					=> $request['table_name'] ?? null ,

        ]);
    }
}
