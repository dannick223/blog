<?php

namespace App;

class posts extends Model
{
  protected $dates = ['created_at', 'updated_at'];

    public function comments()
    {
    return $this->hasMany(Comments::class,'post_id');
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
      Comments::create([
        'body' => request('body'),
        'user_id' => auth()->id(),
        'post_id' => $this->id
      ]);
    }

}
