<?php

namespace App\Http\Requests;

use App\Blog;
use App\Tag;
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
        if (!empty($this->tags)) {
            $tags = collect($this->tags);
        }
        $blogData = [
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'body' => $this->body
        ];

        $blog = Blog::create($blogData);

        if (!empty($blog)) {
            $tags->each(function($tag) use ($blog) {
                $blog->tags()->attach($tag, ['taggable_id' => $blog->id, 'taggable_type' => 'App\Blog']);
            });
        }

    }
}
