<?php


namespace App\Helpers;


use App\Domain\General\Users\Activities\Browsers\Browsers\Mode\Browser;
use App\Domain\General\Users\Activities\Browsers\BrowserVersions\Mode\BrowserVersion;
use App\Domain\General\Users\Activities\Devices\Model\Device;
use App\Domain\General\Users\Activities\DeviceType\DTO\DeviceTypeDTO;
use App\Domain\General\Users\Activities\DeviceType\Model\DeviceType;
use App\Domain\General\Users\Activities\Platforms\Platforms\Model\Platform;
use App\Domain\General\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Jenssegers\Agent\Agent;

class UserAgent
{

    private $agent ;

    public function __construct()
    {
        $this->agent = new Agent();
    }

    public function get_ip(){
        return request()->ip();
    }
    public function get_device_id(){
        $request_device = $this->agent->device();
        $request_device_type = $this->agent->deviceType();

        $device_type = DeviceType::where('name',$request_device_type)->first();
        if(!$device_type)
            $device_type = new DeviceType([
                'name' => $request_device_type
            ]);

        $device = Device::where('name',$request_device)->first();
        if(!$device)
            $device = new Device([
                'name' => $request_device,
                'device_type_id' => $device_type->id
            ]);
        return $device->id ;
    }
    public function get_platform_version(){
        $platform_name = $this->agent->platform();
        $platform_version = $this->agent->version($platform_name);

        $platform = Platform::where('name',$platform_name)->first();
        if(!$platform)
            $platform = new Platform([
                'name' => $platform_name
            ]);

        $platform_version = PlatformVersion::where('version',$platform_version)->first();
        if(!$platform_version)
            $platform_version = new PlatformVersion([
                'version' => $platform_version,
            ]);
        return $platform_version->id;

    }
    public function get_browser_version(){
        $browser_name = $this->agent->browser();
        $browser_version = $this->agent->version($browser_name);

        $browser = Browser::where('name',$browser_name)->first();
        if(!$browser)
            $platform = new Platform([
                'name' => $browser_name
            ]);

        $$browser_version = BrowserVersion::where('version',$browser_version)->first();
        if(!$browser_version)
            $browser_version = new PlatformVersion([
                'version' => $browser_version,
            ]);
        return $browser_version->id;
    }
}
