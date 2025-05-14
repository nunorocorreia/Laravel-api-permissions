<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {

    }

    /**
     * Determine if the user can view the user listing.
     *
     * @param  \App\Models\User  $user  The authenticated user
     * @return bool
     */
    public function index(User $user)
    {
        return true;
    }

    /**
     * Determine if the user can view the user.
     *
     * @param  \App\Models\User  $user  The authenticated user
     * @param  \App\Models\User  $model  The user being viewed
     * @return bool
     */
    public function show(User $user, User $model)
    {
        return true;
        return $user->id === $model->id || $user->isAdmin();
    }
}
