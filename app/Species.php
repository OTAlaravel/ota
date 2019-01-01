<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['locale', 'species_name'];

    protected $fillable = ['locale', 'species_name'];
}
