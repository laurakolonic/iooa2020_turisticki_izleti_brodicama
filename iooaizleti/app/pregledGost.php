<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gost extends Model
   {
      protected $table='gost_putovanjes';
      protected $guarded=[];
  
      public function gost(){
          return $this->belongsTo(User::class, 'idGost');
      }
  
      public function putovanje(){
          return $this->belongsTo(Putovanje::class, 'idPutovanje');
      
      
         }}