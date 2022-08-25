<?php

namespace App\Domain\Users\Users\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class UserDTO extends DataTransferObject
{
    /**
     * @var integer|null
     */
    public $id;
    /**
     * @var string|null
     */
    public $name;
    /**
     * @var string|null
     */
    public $email ;
    /**
     * @var string|null
     */
    public $phone_number ;
    /**
     * @var string|null
     */
    public $email_verified_at ;
    /**
     * @var string|null
     */
    public $password ;
    /**
     * @var string|null
     */
    public $remember_token;


    public static function fromRequest($request){
        return new self([
            'id'=> $request['id'] ?? null,
            'name'=> $request['name'] ?? null,
            'email'=> $request['email'] ?? null,
            'email_verified_at'=> $request['email_verified_at'] ?? null,
            'phone_number'=> $request['phone_number'] ?? null,
            'password'=> $request['password'] ?? null,
            'remember_token'=> $request['remember_token'] ?? null,
        ]);
    }
}
