<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bedrijfsprofiel extends Model
{
    protected $table = 'bedrijfsprofielen';
    protected $fillable = ['title','picture','body'];
}
