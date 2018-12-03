<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsTranslation extends Model
{
      public $timestamps = false;

        protected $fillable = ['post_title','post_slug', 'post_description'];
}
