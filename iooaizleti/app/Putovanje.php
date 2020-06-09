<?php

namespace App;

use App\Brod;
use App\Ruta;
use App\Zaposlenik;
use Illuminate\Database\Eloquent\Model;

class Putovanje extends Model
{
    protected $fillable=['id', 'datum', 'vrijeme','idBrod','idRuta', 'idZaposlenik'];

    public function brod(){
        return $this->belongsTo(Brod::class, 'idBrod');
    }

    public function ruta(){
        return $this->belongsTo(Ruta::class, 'idRuta');
    }

    public function zaposlenik(){
        return $this->belongsTo(Zaposlenik::class, 'idZaposlenik');
    }
}
