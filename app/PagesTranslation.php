<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagesTranslation extends Model
{
        public $timestamps = false;

        protected $fillable = ['page_title','page_slug', 'page_description'];
}
