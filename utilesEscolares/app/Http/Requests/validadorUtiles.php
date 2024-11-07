<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorUtiles extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
        return [
            
            'nombre'=> 'required|min:3|max:20',
            'Marca'=> 'required|min:3|max:5',
            'Cantidad'=> 'required|numeric',
        
{
    return [
        'nombre' => 'required|min:3|max:20',
        'Marca' => 'required|min:3|max:20',  
        'Cantidad' => 'required|numeric',
    ];
}
               
    }
}

