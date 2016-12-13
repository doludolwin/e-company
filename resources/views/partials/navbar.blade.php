
    <nav class="navbar navbar-light">
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars white" aria-hidden="true"></i>
      </button>
       <div class="collapse navbar-toggleable-md" id="navbarResponsive">
          <a class="navbar-brand" href="#">
          <img src="images/icons/LOGO.png" height="25px" width="150px" alt="">
          </a>
          @if (Route::has('login'))
              <ul class="nav navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/login') }}">team</a>
                  </li>
                  @if (Auth::check())
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/home') }}">Home</a>
                  </li>
                  @else
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/login') }}">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/register') }}">Register</a>
                  </li>
                  @endif
              </ul>
          @endif
       </div>
    </nav>
