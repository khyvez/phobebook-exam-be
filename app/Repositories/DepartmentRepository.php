<?php

namespace App\Repositories;

use App\Models\Department;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    public function all()
    {
        return Department::all();
    }

    public function show($id)
    {
        return Department::with('employees')->findOrFail($id);
    }

    public function update(Department $department, $request)
    {
        $department->update($request);
        return $department;
    }

    public function save($request)
    {
        return Department::create($request);
    }

    public function delete(Department $department)
    {
        $department->delete();
    }
}
