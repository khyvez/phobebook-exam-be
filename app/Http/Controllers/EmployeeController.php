<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Http\Requests\EmployeeStoreRequest;

class EmployeeController extends Controller
{
    private $employeeRepository;

    /**
     * construct.
     */
    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            [
                'status' => 200,
                'data' => $this->employeeRepository->all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoreRequest $request)
    {
        return response()->json(
            [
                'status' => 201,
                'data' => $this->employeeRepository->save($request->all())
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeStoreRequest $request, Employee $employee)
    {
        return response()->json(
            [
                'status' => 201,
                'data' => $this->employeeRepository->update($employee, $request->all())
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $this->employeeRepository->delete($employee);

        return response()->json(
            [
                'status' => 201,
                'data' => 'Succesfully deleted'
            ]
        );
    }
}
