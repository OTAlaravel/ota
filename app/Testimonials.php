<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['locale', 'testimonials_name', 'testimonials_content', 'testimonials_image'];

    protected $fillable = ['locale', 'testimonials_name', 'testimonials_content', 'testimonials_image'];
}
