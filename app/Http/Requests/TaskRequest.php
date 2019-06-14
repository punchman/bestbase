<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class TaskRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }

        public function rules()
        {
            return [
                'description'   => 'required|max:500',
                'project_id'    => 'required',
                'user_id'       => '',
                'hours'         => 'max:50',
                'rate'          => 'max:50',
                'comment'       => 'max:500',
                'date'          => '',
                'status'        => '',
                'aproved'       => ''
            ];
        }
    }
