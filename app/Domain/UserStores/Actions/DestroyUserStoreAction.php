<?php


namespace App\Domain\UserStores\Actions;


use App\Domain\UserStores\Model\UserStore;

class DestroyUserStoreAction
{
    public static function execute(
        UserStore $user_store
    ){
        $user_store->delete();
        return $user_store;
    }
}
