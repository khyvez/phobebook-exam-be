<?php

namespace App\Repositories\Interfaces;
use App\Models\Department;

interface DepartmentRepositoryInterface
{
    public function all();

    public function show($id);

    public function update(Department $department, $request);

    public function save($request);

    public function delete(Department $department);

}
