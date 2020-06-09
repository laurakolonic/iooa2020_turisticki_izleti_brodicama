<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brod extends Model
{
    protected $fillable=['id', 'nazivBrod', 'opisBrod', 'image'];
}
