<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class ProjectRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }

        public function rules()
        {
            return [
                'project_name'       => 'required|max:100',
                'company_id'         => 'required',
                'date_from'          => 'required',
                'date_to'            => 'required',
                'description'        => 'required|max:500',
                'amount'             => 'required|max:10',
                'status'             => 'required|max:50',
                'detail_description' => 'max:500'
            ];
        }
    }
