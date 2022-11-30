<?php


namespace App\Http\ViewModels\Contents;

use App\Domain\Contents\Model\Content;
use Illuminate\Contracts\Support\Arrayable;


class GetContentVM implements Arrayable
{

    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function toArray()
    {
        return  $this->content;
    }
}
