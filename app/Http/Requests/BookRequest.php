<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required|string',
            'description'=>'required|string',
            'date'=>'required|date'
            // 'pages'=>'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Coloque o título!',
            'description.required'  => 'Coloque a descrição da tarefa.',
            'date.required'  => 'Coloque a data de forma correta.',

        ];
    }

    
}
