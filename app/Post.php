<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{

   public function users()
    {
        return $this->belongsTo('App\User');
    }
}
