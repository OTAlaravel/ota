<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['locale', 'hotels_name','hotels_desc'];

    protected $fillable = ['locale', 'hotels_name','hotels_desc'];
}
