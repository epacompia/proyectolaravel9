<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool  //este metodo se usa para hace runa verificacio adicional
    {
        return true; // lo cambio  a true para activar los requests
     }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'slug' => 'required|unique:posts', //esto lo coloco porque cuando edito o actualizo este registro y me considere el slug que ya tenia y no me tome como nuevo slug
            'body' => 'required',
            'category_id' => 'required|exists:categories,id', //esto es para que caundo un usuario quiera agregar otra opcion por el html de forma maliciosa no lo pueda hacer, por eso le digo que tiene qeu existtir en categories con la clausula exist
            'user_id' => 'required|exists:users,id', //esto es para que cuando se agrege un valor en el html de forma mal intencionada no lo acepte


        ];
    }

    public function messages(){
        return [
            'title.required' => 'Se requiere un nombre de la post',
           'slug.unique' => 'El slug es requiere un nombre de la post',
        ];
    }

    public function attributes(){
        return [
            'title' => 'titulo'
        ];
    }
}
