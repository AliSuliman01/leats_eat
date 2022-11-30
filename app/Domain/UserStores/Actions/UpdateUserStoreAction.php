<?php

namespace App\Domain\UserStores\Actions;

use App\Domain\UserStores\DTO\UserStoreDTO;
use App\Domain\UserStores\Model\UserStore;

class UpdateUserStoreAction
{

    public static function execute(
        UserStore $user_store,UserStoreDTO $user_storeDTO
    ){
        $user_store->update(array_null_filter($user_storeDTO->toArray()));
        return $user_store;
    }
}
