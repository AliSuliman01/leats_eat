<?php


namespace App\Domain\UserStores\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class UserStoreDTO extends DataTransferObject
{

	/* @var integer|null */
	public $user_id;
	/* @var string|null */
	public $name;
	/* @var string|null */
	public $description;
	/* @var string|null */
	public $email;
	/* @var string|null */
	public $whatsapp_number;
	/* @var string|null */
	public $mobile_number;
	/* @var string|null */
	public $contact_number;
	/* @var string|null */
	public $twitter_url;
	/* @var string|null */
	public $facebook_url;
	/* @var string|null */
	public $vat_number;
	/* @var string|null */
	public $website_url;
	/* @var string|null */
	public $full_address;
	/* @var string|null */
	public $image_path;
	/* @var integer|null */
	public $city_region_id;


    public static function fromRequest($request)
    {
        return new self([
			'user_id'				=> $request['user_id'] ?? null ,
			'name'				=> $request['name'] ?? null ,
			'description'				=> $request['description'] ?? null ,
			'email'				=> $request['email'] ?? null ,
			'whatsapp_number'				=> $request['whatsapp_number'] ?? null ,
			'mobile_number'				=> $request['mobile_number'] ?? null ,
			'contact_number'				=> $request['contact_number'] ?? null ,
			'twitter_url'				=> $request['twitter_url'] ?? null ,
			'facebook_url'				=> $request['facebook_url'] ?? null ,
			'vat_number'				=> $request['vat_number'] ?? null ,
			'website_url'				=> $request['website_url'] ?? null ,
			'full_address'				=> $request['full_address'] ?? null ,
			'image_path'				=> $request['image_path'] ?? null ,
			'city_region_id'				=> $request['city_region_id'] ?? null ,

        ]);
    }
}
