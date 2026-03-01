<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaninoRequest extends FormRequest
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
    {
        return [
            'name'=> 'required|min:2',
            'description'=> 'required|min:10',
            'img'=>'required|image'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Devi dare un nome al tuo panino',
            'name.min'=>'Il nome del panino deve avere almeno 2 caratteri',
            'description.required'=>'La descrizione del panino è obbligatoria',
            'description.min'=>'La descrizione del panino deve avere almeno 10 caratteri',
            'img.required'=>'Devi aggiungere una foto del tuo panino',
            'img.image'=>'Puoi caricare solo file di tipo immagine'
        ];
    }
}
