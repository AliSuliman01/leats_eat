<?php

namespace App\Domain\Users\Users\Actions;

use App\Domain\Users\Users\Model\User;
use App\Domain\Users\Users\DTO\UserDTO;
use Illuminate\Support\Facades\Hash;

class UserStoreAction
{
    public static function execute(UserDTO $userDTO){
        $user = new User($userDTO->toArray());
        $user->password = Hash::make($userDTO->password);
        $user->save();
        return $user;
    }
}
