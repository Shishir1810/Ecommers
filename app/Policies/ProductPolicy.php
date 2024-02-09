<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return $user->usertype===1;
    }


    public function view(User $user, Product $product)
    {
        return $user->usertype===1;
    }


    public function create(User $user)
    {
        return $user->usertype===1;
    }


    public function update(User $user, Product $product)
    {
        return $user->usertype===1;
    }

    public function delete(User $user, Product $product)
    {
        return $user->usertype===1;
    }


    public function restore(User $user, Product $product)
    {
        return $user->usertype===1;
    }


    public function forceDelete(User $user, Product $product)
    {
        return $user->usertype===1;
    }
}
