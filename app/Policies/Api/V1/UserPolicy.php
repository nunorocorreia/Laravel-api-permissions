<?php

namespace App\Policies\Api\V1;

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
}
