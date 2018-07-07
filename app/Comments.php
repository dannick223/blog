<?php

namespace App;

class Comments extends Model
{
  protected $dates = ['created_at', 'updated_at'];

    public function post()
    {
      return $this->belongsTo(posts::class, 'post_id');
    }

    public function user() // $comment->user->name
    {
      return $this->belongsTo(User::class);
    }


}
