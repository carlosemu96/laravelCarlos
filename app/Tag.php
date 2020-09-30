<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Whoops\Run;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['name', 'article_id', 'tag_id'];

    public function article(){

        return $this->belongsToMany('App\Article');
    }
}
