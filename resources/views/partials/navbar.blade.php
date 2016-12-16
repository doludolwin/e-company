
    <nav class="navbar navbar-light">
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <!-- <img src="images/icons/escores.png" height="100%" width="100%" alt=""> -->
      </button>
       <div class="collapse navbar-toggleable-md" id="navbarResponsive">
          <a class="navbar-brand" href="/">
          <img src="images/icons/LOGO.png" height="25px" width="150px" alt="">
          </a>
          @if (Route::has('login'))
              <ul class="nav navbar-nav">
                  @if (Auth::check())
                  <li class="nav-item">
                      <span>
                      <!-- sign out make:auth -->
                          <a class="nav-link" href="{{ url('/logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit(); ">
                              <i class="fa fa-sign-out white" aria-hidden="true">
                                Sign out  
                              </i>                                                        
                          </a>
                      <!-- sign out make:aurh -->
                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                          </form>
                      </span>
                  </li>
                  @else
                  <li class="nav-item">
                      <span>
                          <a class="nav-link white" href="{{ url('/login') }}">
                              <i class="fa fa-sign-in white" aria-hidden="true"></i>
                              Sign in
                          </a>
                      </span>
                  </li>
                  <li class="nav-item">
                      <span>
                          <a class="nav-link white" href="{{ url('/register') }}">
                              <i class="fa fa-user-plus white" aria-hidden="true"></i>
                              Sign up
                          </a>
                      </span>
                  </li>
                  @endif
                  <li class="nav-item">
                      <span>
                          <a class="nav-link white" href="{{ url('/login') }}">
                              <i class="fa fa-users white" aria-hidden="true"></i>
                              Team
                          </a>
                      </span>
                  </li>
              </ul>
          @endif
       </div>
    </nav>
