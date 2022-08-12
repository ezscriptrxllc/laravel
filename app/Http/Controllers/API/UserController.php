<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Http\Requests\UserDeleteValidator;
use App\Http\Requests\UserValidator;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repository->getAll();
        return Response::success(UserResource::collection($users), 'Users list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserValidator $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserValidator $request)
    {
        $user = $this->repository->save($request);

        return Response::success(new UserResource($user), "New user created");
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return Response::success(new UserResource($user), "User fetched");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserValidator $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserValidator $request, User $user)
    {
        $user = $this->repository->update($request, $user);

        return Response::success(new UserResource($user), "User updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Request $request)
    {
        $requestedUser = User::whereEmail($request->email)->first();

        if (!$user->is($requestedUser)) {
            return Response::fail("The user was not deleted", array("email" => "The requested ID does not match with the requested email"));
        }

        $this->repository->delete($user);

        return Response::success(new UserResource($user), "User deleted");
    }
}
