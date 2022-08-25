<?php


namespace App\Http\Requests\Users\Activities\Browsers\BrowserVersions;


use App\Http\Requests\ApiFormRequest;

class BrowserVersionStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'browser_id' 					=> '' ,
			'version' 					=> '' ,

        ];
    }
}
