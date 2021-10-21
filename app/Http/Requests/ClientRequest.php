<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == '/'){
            return true;
        }else{
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
            'name' => 'required|string',
            'role' => 'required',
            'email' => 'required|email',
            'age' => 'numeric|size:8',
            'registered_at' => 'date|nullable',
            'building' => 'string',
            'comment' => 'required|size:120|string',
        ];
    }
    public function messages()
    {
        return[
            'name.required|string' =>'例）山田　太朗',
            'role.required' =>'',
            'email.required|email' =>'例）test@example.com',
            'age.umeric|between:0,150' =>'例）　123−456',
            'registered_at.date|nullable' =>'例）　東京都千駄ヶ谷1-2-３',
            'building.' =>'例）千駄ヶ谷マンション101',
            'comment.required|size:120|string' =>'',
        ];
    }
    protected function getRedirectUrl()
    {
        return 'verror';
    }
}
