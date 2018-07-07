@extends('partials.master')
@section('title', 'Daniels blog')
@section('page-title', 'Daniels blog')
@section('page-description', 'This is a blog, nothing more.')
  @section('blog-main-content')
@foreach($posts as $p)
  <div class="blog-post">
     <a href="/post/{{$p->id}}" class="blog-post-title">{{$p->title}}</a>
     <h6 style="color:grey;font-style:italic;">{{$p->manchet}}</h6>
     <p class="blog-post-meta"><a href="#">{{ucfirst($p->user->name)}}</a> on {{\Carbon\Carbon::parse($p->created_at)->format('d-m-Y')}}</p>
     <p>{{$p->body}}</p>
   </div>
@endforeach
@endsection
