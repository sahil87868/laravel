
@include('sweetalert::alert')
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid ">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : demo@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index">
              <span>
                Carint
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service">Services</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="about"> About <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact">Contact Us</a>
                </li>
                <li class="nav-item">
                  @if(session()->has('userid'))
                  <li></li><a class="nav-link" href="profile"> <i class="fa fa-user" aria-hidden="true"></i> <span>
                    hii..{{session('name')}}
                  </span></a></li>
                  <li><a class="nav-link" href="userlogout"> <i class="fa fa-user" aria-hidden="true"></i> logout</a></li>
                  @else
                  <li><a class="nav-link" href="login"> <i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                </li>
                @endif
                
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>
