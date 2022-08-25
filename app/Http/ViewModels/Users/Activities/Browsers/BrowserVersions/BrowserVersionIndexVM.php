<?php


namespace App\Http\ViewModels\Users\Activities\Browsers\BrowserVersions;

use App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion;
use Illuminate\Contracts\Support\Arrayable;

class BrowserVersionIndexVM implements Arrayable
{

    public function get_browser_versions(){
    	return BrowserVersion::all();
	}
    public function toArray(): array
    {
        return $this->get_browser_versions()->toArray();
    }
}
