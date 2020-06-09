<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zaposlenik extends Model
{
    protected $fillable=['id', 'oibZaposlenik', 'imeZaposlenik','PrezimeZaposlenik','datumRodenja'];
}
