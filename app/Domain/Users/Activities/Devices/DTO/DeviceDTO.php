<?php


namespace App\Domain\Users\Activities\Devices\DTO;


use Spatie\DataTransferObject\DataTransferObject;

class DeviceDTO extends DataTransferObject
{

    /* @var integer|null */
    public $id;
    /* @var string|null */
    public $name;
    /* @var integer|null */
    public $device_type_id  ;


    public static function fromRequest($request){
        return new self([
            'id'    => $request['id'] ?? null,
            'name' => $request['name'] ?? null,
            'device_type_id' => $request['device_type_id'] ?? null,

        ]);
    }

}
