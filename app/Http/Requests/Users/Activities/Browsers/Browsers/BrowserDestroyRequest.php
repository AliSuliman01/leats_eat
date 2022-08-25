<?php


namespace App\Http\Requests\Users\Activities\Browsers\Browsers;


use App\Http\Requests\ApiFormRequest;

class BrowserDestroyRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:browsers,id,deleted_at,NULL',
        ];
    }
}
