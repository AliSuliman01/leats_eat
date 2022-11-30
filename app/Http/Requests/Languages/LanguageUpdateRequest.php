<?php


namespace App\Http\Requests\Languages;


use App\Http\Requests\ApiFormRequest;

class LanguageUpdateRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'name' 		=> 'nullable|unique:languages,name,NULL,id,deleted_at,NULL' ,
        ];
    }
}
