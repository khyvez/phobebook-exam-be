<?php

namespace App\Repositories\Interfaces;
use App\Models\Employee;

interface EmployeeRepositoryInterface
{
    public function all();

    public function update(Employee $employee, $request);

    public function save($request);

    public function delete(Employee $employee);

}
