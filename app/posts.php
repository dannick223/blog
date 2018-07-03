<?php

namespace App;

class posts extends Model
{
  protected $dates = ['created_at', 'updated_at'];

    public function comments(){
    return $this->hasMany(Comments::class,'post_id');
    }
    public function addComment($body)
    {
      Comments::create([
        'body' => request('body'),
        'post_id' => $this->id
      ]);
    }

}
