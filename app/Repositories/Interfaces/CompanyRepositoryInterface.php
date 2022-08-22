<?php

namespace App\Repositories\Interfaces;
use App\Models\Company;

interface CompanyRepositoryInterface
{
    public function all();

    public function show($id);

    public function update(Company $company, $request);

    public function save($request);

    public function delete(Company $company);

}
