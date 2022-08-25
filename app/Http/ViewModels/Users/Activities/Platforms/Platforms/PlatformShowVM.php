<?php


namespace App\Http\ViewModels\Users\Activities\Platforms\Platforms;

use App\Domain\Users\Activities\Platforms\Platforms\Model\Platform;
use Illuminate\Contracts\Support\Arrayable;


class PlatformShowVM implements Arrayable
{

    private $platformId;

    public function __construct($props)
    {
        $this->platformId = $props['id'] ;
    }

    private function get_Platform(){
        return Platform::find($this->platformId);
    }
    public function toArray(): array
    {
        return  $this->get_Platform()->toArray();
    }
}
