<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $primaryKey = 'productId';
  public $timestamps = false;


      public function favourites()
      {
        return $this->morphToMany(User::class, 'routines');
      }

      public static function favouritedBy(User $user)
      {
        $_this = new self;
        return $_this->favourites->contains($user);
}
}
