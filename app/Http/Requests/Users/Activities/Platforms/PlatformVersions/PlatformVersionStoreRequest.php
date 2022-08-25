<?php


namespace App\Http\Requests\Users\Activities\Platforms\PlatformVersions;


use App\Http\Requests\ApiFormRequest;

class PlatformVersionStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'platform_id' 					=> '' ,
			'version' 					=> '' ,

        ];
    }
}
