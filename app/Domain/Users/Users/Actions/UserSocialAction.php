<?php

namespace App\Domain\Users\Users\Actions;

use App\Domain\Users\Users\DTO\UserDTO;
use App\Domain\Users\Users\Model\User;
use App\Http\Requests\Users\Users\SocialRequest;
use Illuminate\Support\Facades\Hash;

class UserSocialAction
{
    public static function execute(UserDTO $userDTO){
        $user = new User($userDTO->toArray());
        $user->save();
        return $user;
    }
}
