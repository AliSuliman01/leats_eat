<?php


namespace App\Http\ViewModels\UserStores;

use App\Domain\UserStores\Model\UserStore;
use Illuminate\Contracts\Support\Arrayable;


class GetUserStoreVM implements Arrayable
{

    private $user_store;

    public function __construct($user_store)
    {
        $this->user_store = $user_store;
    }

    public function toArray()
    {
        return  $this->user_store;
    }
}
