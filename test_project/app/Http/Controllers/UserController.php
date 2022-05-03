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

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
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
