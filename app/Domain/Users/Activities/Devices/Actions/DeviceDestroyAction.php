<?php


namespace App\Domain\Users\Activities\Devices\Actions;


use App\Domain\Users\Activities\Devices\Model\Device;
use Illuminate\Support\Facades\Auth;

class DeviceDestroyAction
{
    public static function execute(
        Device $device
    ){
        $device->deleted_by_user_id = Auth::id();
        $device->save();
        $device->delete();
        return "deleted successfully." ;
    }
}
