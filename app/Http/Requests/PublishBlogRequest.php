<?php

namespace App\Http\Requests;

use App\Blog;
use Illuminate\Foundation\Http\FormRequest;

class PublishBlogRequest extends FormRequest
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
            'title' => 'required',
            'body' => 'required'
        ];
    }

    public function persist()
    {
        Blog::create($this->all());
    }
}
