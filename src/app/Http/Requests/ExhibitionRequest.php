<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'item-name' => 'required',
            'item-description' => 'required|max:255',
            'item-image' => 'required|mimes:jpeg,png',
            'category' => 'required',
            'condition' => 'required',
            'price' => 'required|numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
            'item-name.required' => '商品名は必須です。',
            'item-description.required' => '商品説明は必須です。',
            'item-description.max' => '商品説明は255文字以内で入力してください。',
            'item-image.required' => '商品画像をアップロードしてください。',
            'item-image.mimes' => '商品画像は.jpegまたは.png形式でアップロードしてください。',
            'category.required' => '商品のカテゴリーを選択してください。',
            'condition.required' => '商品の状態を選択してください。',
            'price.required' => '商品価格は必須です。',
            'price.numeric' => '商品価格は数値で入力してください。',
            'price.min' => '商品価格は0円以上で入力してください。',
        ];
    }
}