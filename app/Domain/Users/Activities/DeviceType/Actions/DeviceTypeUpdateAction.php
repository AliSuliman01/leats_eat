<?php


namespace App\Domain\Users\Activities\DeviceType\Actions;


use App\Domain\Users\Activities\DeviceType\DTO\DeviceTypeDTO;
use App\Domain\Users\Activities\DeviceType\Model\DeviceType;
use Illuminate\Support\Facades\Auth;

class DeviceTypeUpdateAction
{

    public static function execute(
        DeviceTypeDTO $deviceTypeDTO
    ){
        $deviceType = DeviceType::find($deviceTypeDTO->id);
        $deviceType->update($deviceTypeDTO->toArray());
        $deviceType->updated_by_user_id = Auth::id();
        $deviceType->save();
        return $deviceType;
    }
}
