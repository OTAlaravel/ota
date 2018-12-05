<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['locale','page_slug','page_title','page_slug','page_description'];

    protected $fillable = ['page_title','page_slug', 'page_description'];
}
