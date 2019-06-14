<?php
    namespace App\Http\Controllers\Web;

    use App\Http\Requests\CompanyRequest;
    use App\Company;

    class CompanyController extends Controller
    {
        public function index()
        {
            $companies = Company::all();
            return view('company.index')->with('companies', $companies);
        }

        public function create()
        {
            return view('company.create');
        }

        public function store(CompanyRequest $request)
        {
            $company = new Company;
            $company->company_name = $request->input('company_name');
            $company->address1     = $request->input('address1');
            $company->address2     = $request->input('address2');
            $company->city         = $request->input('city');
            $company->state        = $request->input('state');
            $company->country      = $request->input('country');
            $company->save();

            return redirect('/companies')->with('success', 'Company Created');
        }

        public function show($id)
        {
            $company = Company::findOrFail($id);
            return view('company.show')->with('company', $company);
        }

        public function edit($id)
        {
            $company = Company::findOrFail($id);
            return view('company.edit')->with('company', $company);
        }

        public function update(CompanyRequest $request, $id)
        {
            $company = Company::findOrFail($id);
            $company->company_name = $request->input('company_name');
            $company->address1     = $request->input('address1');
            $company->address2     = $request->input('address2');
            $company->city         = $request->input('city');
            $company->state        = $request->input('state');
            $company->country      = $request->input('country');
            $company->update();

            return redirect('/companies/'.$id)->with('success', 'Company Updated');
        }

        public function destroy($id)
        {
            $company = Company::findOrFail($id);
            $company->delete();
            return redirect('/companies')->with('success', 'Company Deleted');
        }

    }