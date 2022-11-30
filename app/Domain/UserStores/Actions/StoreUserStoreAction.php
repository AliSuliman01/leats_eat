<?php


namespace App\Domain\UserStores\Actions;


use App\Domain\UserStores\DTO\UserStoreDTO;
use App\Domain\UserStores\Model\UserStore;

class StoreUserStoreAction
{
    public static function execute(
    UserStoreDTO $user_storeDTO
    ){

        return UserStore::create(array_null_filter($user_storeDTO->toArray()));
    }
}
