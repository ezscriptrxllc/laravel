<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Response;

class UserRepository implements BaseInterface
{

    public function getAll()
    {
        return User::all();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function save(FormRequest $request)
    {
        $user = User::make($request->all());
        $user->password = bcrypt($request->password);

        $user->save();

        return $user;
    }

    public function update(FormRequest $request, User|Model $user)
    {
        $user->fill($request->all());
        $user->save();

        return $user;
    }

    public function delete(User|Model $user)
    {
        return $user->delete();
    }
}
