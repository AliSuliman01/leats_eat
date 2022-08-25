<?php


namespace App\Domain\Users\Activities\Browsers\BrowserVersions\Actions;


use App\Domain\Users\Activities\Browsers\BrowserVersions\DTO\BrowserVersionDTO;
use App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion;
use Illuminate\Support\Facades\Auth;

class BrowserVersionUpdateAction
{

    public static function execute(
        BrowserVersionDTO $browserVersionDTO
    ){
        $browserVersion = BrowserVersion::find($browserVersionDTO->id);
        $browserVersion->update(array_filter($browserVersionDTO->toArray()));
        $browserVersion->save();
        return $browserVersion;
    }
}
