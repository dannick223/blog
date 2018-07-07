<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\Comments;

class commentsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function store(posts $post){
    $post->addComment(request('body'));
    return back();
  }
}
