<?php


namespace App\Http\ViewModels\Users\Activities\Browsers\Browsers;

use App\Domain\Users\Activities\Browsers\Browsers\Model\Browser;
use Illuminate\Contracts\Support\Arrayable;


class BrowserShowVM implements Arrayable
{

    private $browserId;

    public function __construct($props)
    {
        $this->browserId = $props['id'] ;
    }

    private function get_Browser(){
        return Browser::find($this->browserId);
    }
    public function toArray(): array
    {
        return  $this->get_Browser()->toArray();
    }
}
