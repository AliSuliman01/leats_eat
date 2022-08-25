<?php


namespace App\Domain\Users\Activities\Platforms\PlatformVersions\Actions;


use App\Domain\Users\Activities\Platforms\PlatformVersions\DTO\PlatformVersionDTO;
use App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Illuminate\Support\Facades\Auth;

class PlatformVersionDestroyAction
{
    public static function execute(
        PlatformVersionDTO   $platformVersionDTO
    ){

        $platformVersion = PlatformVersion::find($platformVersionDTO->id);
        $platformVersion->delete();
        return $platformVersion;
    }
}
