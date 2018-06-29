@extends('partials.master')
@section('title', 'Create post | Daniels blog')
@section('page-title', 'Create Post')
@section('page-description', 'This is a blog, nothing more.')
@section('blog-main-content')
<form method="post" action="/store/post">
  {{csrf_field()}}
  <fieldset class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
  </fieldset>
  <fieldset class="form-group">
    <label for="manchet">Manchét</label>
    <input type="text" name="manchet" class="form-control" id="manchet" placeholder="Manchét">
  </fieldset>
  <fieldset class="form-group">
    <label for="body">Text</label>
    <textarea col="1" row="1" name="body" id="body" class="form-control" style="resize:none; height:150px;" placeholder="Text"></textarea>
  </fieldset>
<button class="btn btn-success" type="submit">Post</button>
</form>
@endsection
