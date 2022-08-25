<?php


namespace App\Http\Requests\Users\Activities\Browsers\BrowserVersions;


use App\Http\Requests\ApiFormRequest;

class BrowserVersionUpdateRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:browser_versions,id,deleted_at,NULL',
            'browser_id' 					=> '' ,
			'version' 					=> '' ,

        ];
    }
}
