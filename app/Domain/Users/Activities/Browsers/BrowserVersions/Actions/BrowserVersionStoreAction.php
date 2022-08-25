<?php


namespace App\Domain\Users\Activities\Browsers\BrowserVersions\Actions;


use App\Domain\Users\Activities\Browsers\BrowserVersions\DTO\BrowserVersionDTO;
use App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion;
use Illuminate\Support\Facades\Auth;

class BrowserVersionStoreAction
{
    public static function execute(
        BrowserVersionDTO $browserVersionDTO
    ){

        $browserVersion = new BrowserVersion($browserVersionDTO->toArray());
        $browserVersion->save();
        return $browserVersion;
    }
}
