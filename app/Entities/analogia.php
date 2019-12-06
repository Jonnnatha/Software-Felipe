<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Analogia extends Model
{
  public $timestamps = true;
  protected $fillable = ['nome','abreviatura'];
 protected $guarded = ['id', 'created_at', 'update_at'];
 protected $table = 'analogia';
}
