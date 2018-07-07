<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>
      <a class="nav-link" href="post/create">Create</a>
      @if(Auth::check())
      <div class="ml-auto nav-link dropdown">
        <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/settings/{{Auth::user()->id}}"><i class="fas fa-cog"></i> Settings</a>
        <a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
      </div>
      @else
      <a class="nav-link ml-auto" href="/login">Login</a>
      @endif
    </nav>
  </div>
</div>
