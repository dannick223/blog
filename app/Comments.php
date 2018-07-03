<?php

namespace App;

class Comments extends Model
{
    public function post()
    {
      return $this->belongsTo(posts::class, 'post_id');
    }
    protected $dates = ['created_at', 'updated_at'];

}
