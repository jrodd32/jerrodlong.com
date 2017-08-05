<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];

    public function phase()
    {
        return $this->belongsTo('App\Phase');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
