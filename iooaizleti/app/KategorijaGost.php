<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategorijaGost extends Model
{
    protected $fillable=['id', 'nazivKategorija', 'godinaRodenja','tekucaGodina','cijena'];
}
