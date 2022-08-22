<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function all()
    {
        return Company::with('departments')->get();
    }

    public function show($id)
    {
        return Company::with('departments')->findOrFail($id);
    }

    public function update(Company $company, $request)
    {
        $company->update($request);
        return $company;
    }

    public function save($request)
    {
        return Company::create($request);
    }

    public function delete(Company $company)
    {
        $company->delete();
    }
}
