<?php


namespace App\Http\ViewModels\Users\Activities\Browsers\BrowserVersions;

use App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion;
use Illuminate\Contracts\Support\Arrayable;


class BrowserVersionShowVM implements Arrayable
{

    private $browserVersionId;

    public function __construct($props)
    {
        $this->browserVersionId = $props['id'] ;
    }

    private function get_BrowserVersion(){
        return BrowserVersion::find($this->browserVersionId);
    }
    public function toArray(): array
    {
        return  $this->get_BrowserVersion()->toArray();
    }
}
