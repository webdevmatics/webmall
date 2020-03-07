<?php

namespace App\Policies;

use App\Product;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
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


    public function read(User $user, Product $product)
    {
        if (empty($product->shop)) {
            return false;
        }

        return $user->id == $product->shop->user_id;
    }

    /**
     * Determine whether the user can update the Product.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function edit(User $user, Product $product)
    {
        if(empty($product->shop)) {
            return false;
        }

        return $user->id == $product->shop->user_id;
    }


    /**
     * Determine whether the user can create Products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can delete the Product.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function delete(User $user, Product $product)
    {
        if (empty($product->shop)) {
            return false;
        }

        return $user->id == $product->shop->user_id;
    }


}
