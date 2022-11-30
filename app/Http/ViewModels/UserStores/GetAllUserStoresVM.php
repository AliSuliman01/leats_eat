<?php


namespace App\Http\ViewModels\UserStores;

use App\Domain\UserStores\Model\UserStore;
use Illuminate\Contracts\Support\Arrayable;

class GetAllUserStoresVM implements Arrayable
{
    public function toArray()
    {
        return UserStore::query()->get();
    }
}
