@extends('partials.master')
@section('title', 'Daniels blog')
@section('page-title', 'Daniels blog')
@section('page-description', 'This is a blog, nothing more.')
  @section('blog-main-content')
@foreach($posts as $p)
  <div class="blog-post">
     <a href="/post/{{$p->id}}" class="blog-post-title">{{$p->title}}</a>
     <h6>{{$p->manchet}}</h6>
     <p class="blog-post-meta">{{\Carbon\Carbon::parse($p->created_at)->format('d-m-Y')}} by <a href="#">Daniel</a></p>
     <p>{{$p->body}}</p>
   </div>
@endforeach
@endsection
