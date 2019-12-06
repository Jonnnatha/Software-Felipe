<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
  public $timestamps = true;
  protected $fillable = ['user_id','nome','valor_inicial','valor_promocao','valor_final','img','notes'];
 protected $guarded = ['id', 'created_at', 'update_at'];
 protected $table = 'oferta';
}
