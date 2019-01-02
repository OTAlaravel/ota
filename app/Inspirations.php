<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspirations extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['locale', 'inspirations_name'];

    protected $fillable = ['locale', 'inspirations_name'];
}
