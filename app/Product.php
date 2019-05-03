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

      public function favorites()
      {
        return $this->morphToMany(User::class, 'routines');
        //return $this->morphToMany();
      }

      public static function favoritedBy(User $user)
      {
        $_this = new self;
        return $_this->favorites->contains($user);
      }
}
