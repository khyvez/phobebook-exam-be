<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::all();
    }

    public function update(Employee $employee, $request)
    {
        $employee->update($request);
        return $employee;
    }

    public function save($request)
    {
        return Employee::create($request);
    }

    public function delete(Employee $employee)
    {
        $employee->delete();
    }
}
