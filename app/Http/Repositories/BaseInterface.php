<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

interface BaseInterface
{
    public function getAll();

    public function findById($id);

    public function save(FormRequest $request);

    public function update(FormRequest $request, Model $model);

    public function delete(Model $user);
}
