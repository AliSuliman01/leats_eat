<?php


namespace App\Http\ViewModels\Contents;

use App\Domain\Contents\Model\Content;
use Illuminate\Contracts\Support\Arrayable;

class GetAllContentsVM implements Arrayable
{
    public function toArray()
    {
        return Content::query()->get();
    }
}
