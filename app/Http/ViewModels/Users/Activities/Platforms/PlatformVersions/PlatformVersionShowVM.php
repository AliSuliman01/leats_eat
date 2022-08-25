<?php


namespace App\Http\ViewModels\Users\Activities\Platforms\PlatformVersions;

use App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Illuminate\Contracts\Support\Arrayable;


class PlatformVersionShowVM implements Arrayable
{

    private $platformVersionId;

    public function __construct($props)
    {
        $this->platformVersionId = $props['id'] ;
    }

    private function get_PlatformVersion(){
        return PlatformVersion::find($this->platformVersionId);
    }
    public function toArray(): array
    {
        return  $this->get_PlatformVersion()->toArray();
    }
}
