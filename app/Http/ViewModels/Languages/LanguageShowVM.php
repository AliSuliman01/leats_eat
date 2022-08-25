<?php


namespace App\Http\ViewModels\Languages;

use App\Domain\Languages\Model\Language;
use Illuminate\Contracts\Support\Arrayable;


class LanguageShowVM implements Arrayable
{

    private $language;

    public function __construct(Language $language)
    {
        $this->language = $language ;
    }

    public function toArray()
    {
        return $this->language;
    }
}
