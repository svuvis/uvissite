<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacature extends Model
{
    protected $table = 'vacatures';
    protected $fillable = ['title','body'];
}
