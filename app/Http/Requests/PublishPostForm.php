<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublishPostForm extends Request
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
            'body' => 'required'
        ];
    }

    /**
     * Persist the form.
     */
    public function persist()
    {
        var_dump($this->all());
    }
}
