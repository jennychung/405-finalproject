<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $primaryKey = 'productId';
  public $timestamps = false;
}
