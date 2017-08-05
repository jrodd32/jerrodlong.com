<?php

namespace App\Http\Requests;

use App\Project;
use App\Tag;
use Illuminate\Foundation\Http\FormRequest;

class PublishProjectRequest extends FormRequest
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
            'name' => 'required',
            'phase_id' => 'required'
        ];
    }

    public function persist()
    {
        $tags = !empty($this->tags) ? collect($this->tags) : '';

        $this->excerpt = !empty($this->excerpt) ? $this->excerpt : null;
        $this->description = !empty($this->description) ? $this->description : null;
        $this->phase_id = !empty($this->phase_id) ? $this->phase_id : 1;
        $this->repo_url = !empty($this->repo_url) ? $this->repo_url : null;

        $projectData = [
            'name' => $this->name,
            'excerpt' => $this->excerpt,
            'description' => $this->description,
            'phase_id' => $this->phase_id,
            'repo_url' => $this->repo_url
        ];

        try {
            $project = Project::create($projectData);
        } catch (Exception $e) {
            dd($e);
        }

        if (!empty($project)) {
            $tags->each(function($tag) use ($project) {
                $project->tags()->attach($tag, ['taggable_id' => $project->id, 'taggable_type' => 'App\Project']);
            });
        }

    }
}
