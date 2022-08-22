<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;
use App\Http\Requests\DepartmentStoreRequest;

class DepartmentController extends Controller
{
    private $departmentRepository;

    /**
     * construct.
     */
    public function __construct(DepartmentRepositoryInterface $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json(
            [
                'status' => 200,
                'data' => $this->departmentRepository->all()
            ]
        );
    }

    /**
     * Display a listing of the specific department
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(
            [
                'status' => 200,
                'data' => $this->departmentRepository->show($id)
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(
            [
                'status' => 201,
                'data' => $this->departmentRepository->save($request->all())
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, department $department)
    {
        return response()->json(
            [
                'status' => 201,
                'data' => $this->departmentRepository->update($department, $request->all())
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {

        $this->departmentRepository->delete($department);

        return response()->json(
            [
                'status' => 201,
                'data' => 'Succesfully deleted'
            ]
        );
    }
}
