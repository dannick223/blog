@extends ('partials.master')
@section('blog-main-content')
<div class="col-sm-8">
<form method="POST" action="/register">
  {{csrf_field()}}
  <fieldset class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
  </fieldset>

  <fieldset class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
  </fieldset>

  <fieldset class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </fieldset>

  <fieldset class="form-group">
    <label for="password_confirmation">Re-enter Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Re-enter password">
  </fieldset>
<button type="submit" class="btn btn-primary">Register</button>

  <div class="form-group">
    @include('partials.errors')
  </div>
</form>
</div>

@endsection
