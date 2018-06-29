@extends('partials.master')
@section('title', 'Daniels blog')
@section('page-title', 'Daniels blog')
@section('page-description', 'This is a blog, nothing more.')
  @section('blog-main-content')
  <div class="blog-post">
     <h2 class="blog-post-title">{{$post->title}}</h2>
     <p class="blog-post-meta">{{\Carbon\Carbon::parse($post->created_at)->format('d-m-Y')}} by <a href="#">{{$post->id}}</a></p>
     <p>{{$post->body}}</p>
   </div>
  @endsection
