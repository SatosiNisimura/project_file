<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力して下さい。',
            'title.max:50' => '50字以内で入力して下さい。',
            'body.required' => '本文を入力してください。',
            'body.max:2000' => '2000字以内で入力して下さい。',
        ];
    }
}
