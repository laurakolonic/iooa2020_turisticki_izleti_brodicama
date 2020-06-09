<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Putovanje extends Model
{
    protected $fillable=['id', 'oibZaposlenik', 'imeZaposlenik','PrezimeZaposlenik','datumRodenja'];
}
