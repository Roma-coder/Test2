<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\DestroyUserRequest;
use App\Http\Requests\User\IndexUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;


class UserController extends Controller
{

    public function index(IndexUserRequest $request)
    {
        return $request->perform();
    }

    public function create(CreateUserRequest $request)
    {
        return $request->perform();
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        return $request->perform($user);
    }

    public function destroy(DestroyUserRequest $request, User $user)
    {
        return $request->perform($user);
    }
}
