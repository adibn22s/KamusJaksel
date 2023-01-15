<?php

namespace App\Http\Requests\Materi;

use App\Models\MasterData\Materi;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


class UpdateMateriRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul' => [
                'required', 'string', 'max:255',
            ],
            'kategori' => [
                'required', 'string', 'max:255',
            ],
            'video' => [
                'nullable', 'mimes:mp4,mov,ogg,qt', 'max:20000',
            ],
        ];
    }
}
