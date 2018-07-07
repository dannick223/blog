@extends('partials.masterNoContent')
@section('blog-main-content')
<div class="col-lg-12">
  <h1>Login</h1>
  <form method="POST" action="/login">
    {{csrf_field()}}
    <fieldset class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Email">
    </fieldset>
    <fieldset class="form-group">
      <label for="pass">Password</label>
      <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
    </fieldset>
    <input type="submit" class="btn btn-primary" value="login">
  </form>
</div>
@endsection
