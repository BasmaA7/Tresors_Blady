<?php

namespace App\Repositories\ManageUsers;

use App\Models\User;

interface ManageUserRepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
    public function paginate($perPage);

}
