<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Policies\Api\V1\UserPolicy;
use Illuminate\Auth\Access\AuthorizationException;

class UsersController extends ApiController
{
    protected $policyClass = UserPolicy::class;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $this->isAble('index', User::class);
        } catch (AuthorizationException) {
            return $this->error('You are not authorized to do this request', 401);
        }
        return UserResource::collection(User::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }


}
