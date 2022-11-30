<?php


namespace App\Http\Requests\UserStores;


use Illuminate\Foundation\Http\FormRequest;

class StoreUserStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'user_id'				=> 'integer|required' ,
			'name'				=> 'string|required' ,
			'description'				=> 'string|nullable' ,
			'email'				=> 'string|nullable' ,
			'whatsapp_number'				=> 'string|nullable' ,
			'mobile_number'				=> 'string|nullable' ,
			'contact_number'				=> 'string|nullable' ,
			'twitter_url'				=> 'string|nullable' ,
			'facebook_url'				=> 'string|nullable' ,
			'vat_number'				=> 'string|nullable' ,
			'website_url'				=> 'string|nullable' ,
			'full_address'				=> 'string|nullable' ,
			'image_path'				=> 'string|nullable' ,
			'city_region_id'				=> 'string|nullable' ,

        ];
    }
}
