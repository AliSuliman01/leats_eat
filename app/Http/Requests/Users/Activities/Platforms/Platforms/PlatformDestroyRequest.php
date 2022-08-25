<?php


namespace App\Http\Requests\Users\Activities\Platforms\Platforms;


use App\Http\Requests\ApiFormRequest;

class PlatformDestroyRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:platforms,id,deleted_at,NULL',
        ];
    }
}
