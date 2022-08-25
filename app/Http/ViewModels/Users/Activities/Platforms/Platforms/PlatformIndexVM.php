<?php


namespace App\Http\ViewModels\Users\Activities\Platforms\Platforms;

use App\Domain\Users\Activities\Platforms\Platforms\Model\Platform;
use Illuminate\Contracts\Support\Arrayable;

class PlatformIndexVM implements Arrayable
{

    public function get_platforms(){
    	return Platform::all();
	}
    public function toArray(): array
    {
        return $this->get_platforms()->toArray();
    }
}
