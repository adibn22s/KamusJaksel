<?php

namespace App\Http\Requests\Materi;

use App\Models\MasterData\Materi;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

use Gate;

class StoreMateriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // abort_if(Gate::denies('materi_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            
            'judul' => [
                'required', 'string', 'max:255','unique:materi',
            ],
            'kategori' => [
                'required', 'string', 'max:255',
            ],
            'video' => [
                'nullable', 'mimes:mp4,mov,ogg,qt', 'max:100000',
            ]
        ];
    }
}
