<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;
use App\Http\Requests\CompanyStoreRequest;

class CompanyController extends Controller
{
    private $companyRepository;

    /**
     * construct.
     */
    public function __construct(CompanyRepositoryInterface $companyRepository)
    {
        $this->companyRepository = $companyRepository;
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
                'data' => $this->companyRepository->all()
            ]
        );
    }

    /**
     * Display a listing of the specific company
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(
            [
                'status' => 200,
                'data' => $this->companyRepository->show($id)
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyStoreRequest $request)
    {
        return response()->json(
            [
                'status' => 201,
                'data' => $this->companyRepository->save($request->all())
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyStoreRequest $request, company $company)
    {
        return response()->json(
            [
                'status' => 201,
                'data' => $this->companyRepository->update($company, $request->all())
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $this->companyRepository->delete($company);

        return response()->json(
            [
                'status' => 201,
                'data' => 'Succesfully deleted'
            ]
        );
    }
}
