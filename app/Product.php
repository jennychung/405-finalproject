<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
  protected $primaryKey = 'productId';
  public $timestamps = false;

  //protected $table = 'routines';

  //protected $fillable = ['user_id'];

      public function favourites()
      {
        return $this->morphToMany(User::class, 'routines');
        //return $this->morphToMany();
      }

      public static function favouritedBy(User $user)
      {
        $_this = new self;
        return $_this->favourites->contains($user);
      }
}
