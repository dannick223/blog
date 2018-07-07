<!DOCTYPE html>
<html lang="en">
  <head>
  @include('partials.header')
  </head>

  <body>
    @include('partials.nav')
    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">@yield('page-title')</h1>
        <p class="lead blog-description">@yield('page-description')</p>
      </div>
    </div>


    <div class="col-sm-8 blog-main">
      @yield('blog-main-content')

      <!-- /.blog-post -->

    </div><!-- /.blog-main -->
    
    @include('partials.footer')
  </body>
</html>
