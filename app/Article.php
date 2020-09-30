<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $tabla = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function categoty(){
        
        return $this->belongsTo('App\Categoty');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function images(){

        return $this->hasMany('App\Images');
    }

    public function tags(){

        return $this->belongsToMany('App\Tag');

    }
}
