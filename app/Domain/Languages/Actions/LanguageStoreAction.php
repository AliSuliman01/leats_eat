<?php


namespace App\Domain\Languages\Actions;


use App\Domain\Languages\DTO\LanguageDTO;
use App\Domain\Languages\Model\Language;
use Illuminate\Support\Facades\Auth;

class LanguageStoreAction
{
    public static function execute(
        LanguageDTO $languageDTO
    ){

        $language = new Language($languageDTO->toArray());
        $language->save();
        return $language;
    }
}
