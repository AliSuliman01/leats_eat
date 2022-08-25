<?php


namespace App\Http\Requests\Languages;


use App\Http\Requests\ApiFormRequest;

class LanguageUpdateRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:languages,id,deleted_at,NULL',
            'name' 		=> 'nullable|unique:languages,name,NULL,id,deleted_at,NULL' ,
            'abbrev' 	=> 'nullable|unique:languages,name,NULL,id,deleted_at,NULL' ,
        ];
    }
}
