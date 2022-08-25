<?php


namespace App\Domain\Users\Activities\DeviceType\Actions;


use App\Domain\Users\Activities\DeviceType\DTO\DeviceTypeDTO;
use App\Domain\Users\Activities\DeviceType\Model\DeviceType;
use Illuminate\Support\Facades\Auth;

class DeviceTypeDestroyAction
{

    public static function execute(
        DeviceType $deviceType
    ){
        $deviceType->deleted_by_user_id = Auth::id();
        $deviceType->save();
        $deviceType->delete();
        return 'deleted_successfully.';
    }
}
