<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last-name' => ['required', 'string'],
            'first-name' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:3,5'],
            'address' => ['required', 'string', 'max:255'],
            'categories' => ['required'],
            'detail' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last-name.required' => '姓を入力してください',
            'first-name.required' => '名を入力してください',
            'last-name.string' => '名を文字列で入力してください',
            'first-name.string' => '名を文字列で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号を数値で入力してください',
            'address.required' => '住所を入力してください',
            'categories.required' => 'お問い合わせの種類を選択してください',
            'detail.max' => 'お問い合わせ内容は120文字以下で入力してください',
        ];
    }
}
