<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class CompanyRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }

        public function rules()
        {
            return [
                'company_name'  => 'required|max:255',
                'address1'      => 'required|max:255',
                'address2'      => 'required|max:255',
                'city'          => 'required|max:100',
                'state'         => 'required|max:100',
                'country'       => 'required|max:100'
            ];
        }
    }
