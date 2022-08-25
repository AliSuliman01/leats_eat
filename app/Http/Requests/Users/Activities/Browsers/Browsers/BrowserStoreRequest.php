<?php


namespace App\Http\Requests\Users\Activities\Browsers\Browsers;


use App\Http\Requests\ApiFormRequest;

class BrowserStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'name' 					=> '' ,

        ];
    }
}
