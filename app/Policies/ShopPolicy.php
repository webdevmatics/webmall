<?php

namespace App\Policies;

use App\Shop;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }


    public function read(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    /**
     * Determine whether the user can update the shop.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function edit(User $user, Shop $shop)
    {

        return $user->id == $shop->user_id;
    }


    /**
     * Determine whether the user can create shops.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the shop.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function delete(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }


}
