<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="math tools">
        <meta name="author" content="Chris Karamichailidis">


        <!-- CSRF Token -->

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('styles')

        <title>TechFreak</title>
    </head>
    <body>
      <nav id="navbar" class="navbar is-primary" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
            <img src="{{asset('img/Tech_Freak_logo.png')}}" alt="Tech Freak: a modern site">
          </a>

          <!-- <button class="button navbar-burger">
            <span></span>
            <span></span>
            <span></span>
          </button> -->
        </div>
        <div class="navbar-menu is-active">
          <div class="navbar-start">
            <!-- navbar items -->
            <a href="/home" class="navbar-item" style="color: black;">
              Home
            </a>
            <a class="navbar-item" style="color: black;">
              Tools
            </a>
            <a class="navbar-item" style="color: black;">
              Kodi
            </a>

          </div>

          <div class="navbar-end">
            <!-- navbar items -->
            <a class="navbar-item" style="color: black;">
              Hey Visitor
            </a>

          </div>
        </div>
      </nav>

      <div id="app">
          @yield('content')
      </div>



        <footer class="footer">
            <div class="container">
              <div class="content has-text-centered">
                <p>
                  <strong>TechFreak</strong> by <a href="#">Chris Karamichailidis</a>. The source code is licensed
                  <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
                </p>
              </div>
            </div>
        </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

    <script type="text/javascript">
    $(document).ready(function() {
//  Dropdowns
$('.dropdown').hover(function(e) {
  $(this).toggleClass('is-open')
})
})

    </script>

    </body>
</html>
