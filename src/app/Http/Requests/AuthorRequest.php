<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'mail' => 'required|email',
            'password' => [
                'required',
                'string',
                'min8',  //最小8文字
                //'confirmed',  //確認用フィールド(password_confirmation)が必要
                'regex:/[a-z]/', //小文字を含む
                'regex:/[A-Z]/', //大文字を含む
                'regex:/[0-9]/', //数字を含む
                'regex:/[@$!%*?$_-]/', //特殊文字を含む
            ],
        ];
    }

    public function messages()
    {
        return [
            'mail' => 'メールアドレスを入力してください',
            'password.min' => 'パスワードは少なくとも8文字以上である必要があります',
            'password.confirmed' => 'パスワードが一致しません',
            'password.regex' => 'パスワードには小文字, 大文字, 数字, 特殊文字を含める必要があります。',
        ];
    }
}

