<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link href="{{ asset('css/themebootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ URL::to('js/nav.js') }}"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Finn</title>
    </head>
    <body>
      <div class="container">
          <div class="row">
                <div class="col-md-12" id="nav_bar" style="background-color: #f6ffff">
                    <ul>
                        <li>
                          <a href="{{route('users.create')}}">Sign Up</a>
                        </li>
                        <li>
                          <a href="{{route('login')}}">Login</a>
                        </li>
                        <li>
                            <a href="{{route('users.index')}}">Admin</a>
                        </li>
                        <li>
                            <a href="{{route('blogs.index')}}">Post</a>
                        </li>
                        <li>
                            <a href="{{route('products.index')}}">Product</a>
                        </li>
                    </ul>
                </div>
          </div>
      </div>
      <div class="container-fluid">
          <div class="row">

              <div class="col-md-1">
                  Quang cao nho trai
              </div>
              <div class="col-md-2">
                  Quang cao ben trai
              </div>
              <div class="col-md-3 col-sm-4">
                  Quang cao ben Phai
              </div>

              <div class="col-md-6 col-sm-9" >
                  <header class="title" style="margin-left: 30%" >
                      Finn
                  </header>
                  <form>
                      <input type="text" name="search" placeholder="Search..">
                  </form>
                  <div class="text">
                      <p4>
                          The last search
                      </p4>
                  </div>
                  <div class="image">
                      <div class="item active"  >
                          <img src="/image/1.png" alt="">
                      </div>
                      <div class="item active" >
                          <img src="/image/2.png" alt="">
                      </div>
                      <div class="item active">
                          <img src="/image/3.png" alt="">
                      </div>
                      <div class="item active">
                          <img src="/image/4.png" alt="">
                      </div>
                  </div>
                  <div class="frame">
                      <div class="framed">
                          <svg width="110" height="100" >
                          </svg>

                      </div>
                      <div class="framed21">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed31">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_12">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_13">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_14">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_15">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_16">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_22">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_23">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_24">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_25">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_26">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_32">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_33">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_34">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_35">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                      <div class="framed_36">
                          <svg width="110" height="100" >
                          </svg>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </body>
</html>
