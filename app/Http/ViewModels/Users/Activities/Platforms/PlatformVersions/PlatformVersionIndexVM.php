<?php


namespace App\Http\ViewModels\Users\Activities\Platforms\PlatformVersions;

use App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Illuminate\Contracts\Support\Arrayable;

class PlatformVersionIndexVM implements Arrayable
{

    public function get_platform_versions(){
    	return PlatformVersion::all();
	}
    public function toArray(): array
    {
        return $this->get_platform_versions()->toArray();
    }
}
