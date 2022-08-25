<?php


namespace App\Http\Requests\Users\Activities\Platforms\PlatformVersions;


use App\Http\Requests\ApiFormRequest;

class PlatformVersionUpdateRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:platform_versions,id,deleted_at,NULL',
            'platform_id' 					=> '' ,
			'version' 					=> '' ,

        ];
    }
}
