<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'user')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'email',
            'password' => 'required|min:6',
            /*'image' => 'dimensions:width=320, height=240'*/
        ];
        $inputs = $request->all();
        return view('user.check', [
           'inputs' => $inputs,
       ]);
    }

    public function messages()
    {
        return [
            'name.required' => '氏名を入力してください。',
            'email.email' => '正しいメールアドレスを入力してください。',
            'password.required' => 'パスワードを入力してください。',
            'password.min' => 'パスワードを6文字以上で入力してください。',
            /*'image.dimensions' => '恐れ入りますが、画像を改めて指定してください。'*/

        ];
    }
}
