<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class ProjectDetailRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }
        public function rules()
        {
            return [
                'project_id'    => 'required',
                'description'   => 'required|max:500'
            ];
        }
    }
