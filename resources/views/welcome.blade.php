<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="{{ asset('css/themebootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Finn</title>
    </head>
    <body>
    <nav class="navbar navbar-default" id="closenav">
        <div class="container-fluid"  onclick ="toggleNav()">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('root')}}">Finn
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{route('users.create')}}">Sign Up</a>
                </li>

                <li>
                    <a href="{{route('users.index')}}">Admin</a>
                </li>
                <li>
                    <a href="{{route('blogs.index')}}">Post</a>
                </li>
                <li class="dropdown">
                    <a
                            class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>&nbsp <span class="glyphicon glyphicon-time"></span></p>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a
                                    href="#">List1
                            </a>
                        </li>
                        <li>
                            <a href="#">List1
                            </a>
                        </li>
                        <li>
                            <a href="#">List1
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="date" id="txt">
                    </div>
                </li>
            </ul>
        </div>
    </nav>
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
              <a href="https://vnexpress.net">
                  <div class="col-md-1">
                      Vnexpress
                  </div>
              </a>
              <a href="https://tinhte.vn">

                  <div class="col-md-2">
                      Tinhte
                  </div>
              </a>

              </div>
          <a href="http://cnet.com">
              <div class="col-md-3 col-sm-4">
                    Cnet
              </div>
          </a>


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
                          <footer>Tam Duc Pham</footer>
                      </p4>
                  </div>
                  <div class="image">
                      <div class="item active" onclick="on" id="postBlog">

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
                      <a href="http://google.com">
                          <div class="framed">
                              <svg width="110" height="100" >
                              </svg>
                          </div>
                      </a>
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
    <script type="text/javascript">
        $(document).ready(function () {

            $('#blogPost').click(function () {
                window.location = $(this).find("a").attr("href");
                return false;
            });
        })
    </script>
    </body>
    <div class="myBox">
        blah blah blah.
        <a href="http://google.com">link</a>
    </div>
</html>
