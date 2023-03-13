<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
             'title' => 'required',
            'slug' => 'required|unique:posts,slug,' . $this->post->id, //esto lo coloco porque cuando edito o actualizo este registro y me considere el slug que ya tenia y no me tome como nuevo slug, accedo con el this al pots  y llamo al id
            'body' => 'required',
            'category_id' => 'required|exists:categories,id', //esto es para que caundo un usuario quiera agregar otra opcion por el html de forma maliciosa no lo pueda hacer, por eso le digo que tiene qeu existtir en categories con la clausula exist
            'user_id' => 'required|exists:users,id', //esto es para que cuando se agrege un valor en el html de forma mal intencionada no lo acepte

        ];
    }
}
