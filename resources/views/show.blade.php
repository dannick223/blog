@extends('partials.master')
@section('title', 'Daniels blog')
@section('page-title', 'Daniels blog')
@section('page-description', 'This is a blog, nothing more.')
@section('blog-main-content')
  <div class="blog-post">
     <h2 class="blog-post-title">{{$post->title}}</h2>
     <h6 style="color:grey;font-style:italic;">{{$post->manchet}}</h6>
     <p class="blog-post-meta"><a href="#">{{$post->user->name}}</a> on {{\Carbon\Carbon::parse($post->created_at)->format('d-M-Y')}}</p>
     <p>{{$post->body}}</p>
   </div>
<hr>
<h3>Comment section</h3>
   <div class="comment-section">
   @foreach($post->comments as $comment)
     <p class="comment-body">{{ucfirst($comment->body)}}</p>
     <p class="comment-author" style="font-size:12px; margin-top:-15px;">Written by: {{$comment->user->name}} <br> <?php echo $comment->created_at->format('d-M-Y'); ?></p>
   @endforeach


 </div>

@if(Auth::check())
 <div class="add-comment form-group">
   <form method="post" action="{{$post->id}}/comments">
     {{csrf_field()}}
   <textarea class="form-control" name="body"></textarea>
   <input type="submit" class="btn btn-primary">
 </div>
 @endif
   @endsection
