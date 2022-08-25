<?php


namespace App\Http\Requests\Languages;


use App\Http\Requests\ApiFormRequest;

class LanguageStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'name' 		=> 'required|unique:languages,name,NULL,id,deleted_at,NULL' ,
			'abbrev' 	=> 'required|unique:languages,name,NULL,id,deleted_at,NULL' ,

        ];
    }
}
