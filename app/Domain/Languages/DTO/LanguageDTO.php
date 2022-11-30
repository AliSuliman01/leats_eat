<?php


namespace App\Domain\Languages\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class LanguageDTO extends DataTransferObject
{
    /* @var string|null */
    public $language_code;
    /* @var string|null */
    public $name;


    public static function fromRequest($request)
    {
        return new self([
            'language_code' => $request['language_code'] ?? null,
            'name' => $request['name'] ?? null,

        ]);
    }
}
