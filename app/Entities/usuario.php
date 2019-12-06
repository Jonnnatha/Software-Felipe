<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
 public $timestamps = true;
 protected $fillable = ['nome','senha','telefone'];
protected $guarded = ['id', 'created_at', 'update_at'];
protected $table = 'usuarios';
}
