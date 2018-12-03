<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
   use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['post_title','post_slug','post_description'];

    protected $fillable = ['post_title','post_slug', 'post_description'];
}
