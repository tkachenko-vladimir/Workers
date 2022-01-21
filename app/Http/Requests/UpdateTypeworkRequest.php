<?php

namespace App\Http\Requests;

use App\Models\Typework;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTypeworkRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('typework_edit');
    }

    public function rules()
    {
        return [
            'type' => [
                'string',
                'nullable',
            ],
        ];
    }
}
