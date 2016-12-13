
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
                  @if (Auth::check())
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/home') }}">Home</a>
                  </li>
                  @else
                  <li class="nav-item">
                      <span>
                          <i class="fa fa-sign-in white" aria-hidden="true"></i>
                          <a class="nav-link white" href="{{ url('/login') }}">Sign in</a>
                      </span>
                  </li>
                  <li class="nav-item">
                      <span>
                          <i class="fa fa-user-plus white" aria-hidden="true"></i>
                          <a class="nav-link white" href="{{ url('/register') }}">Sign up</a>
                      </span>
                  </li>
                  @endif
                  <li class="nav-item">
                      <span>
                          <i class="fa fa-users white" aria-hidden="true"></i>
                          <a class="nav-link white" href="{{ url('/login') }}">Team</a>
                      </span>
                  </li>
              </ul>
          @endif
       </div>
    </nav>
