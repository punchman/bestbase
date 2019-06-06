<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\CompanyRequest;
    use App\Company;

    class CompanyController extends Controller
    {
        public function index()
        {
            $companies = Company::all();
            return response()->json($companies);
        }
        public function store(CompanyRequest $request)
        {
            $company = Company::create($request->all());
            return response()->json($company, 201);
        }
        public function show($id)
        {
            $company = Company::findOrFail($id);
            return response()->json($company);
        }
        public function update(CompanyRequest $request, $id)
        {
            $company = Company::findOrFail($id);
            $company->update($request->all());
            return response()->json($company, 200);
        }
        public function destroy($id)
        {
            Company::destroy($id);
            return response()->json(null, 204);
        }
    }