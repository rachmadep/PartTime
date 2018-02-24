<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
  public function user()
  {
      return $this->belongsToMany(Users::class, 'user_id', 'id');
  }
}
