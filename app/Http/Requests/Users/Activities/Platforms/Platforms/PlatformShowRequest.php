<?php


namespace App\Http\Requests\Users\Activities\Platforms\Platforms;


use App\Http\Requests\ApiFormRequest;

class PlatformShowRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id'=> 'required|exists:platforms,id,deleted_at,NULL',
        ];
    }
}
