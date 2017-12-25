<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{URL::to('js/bootstrap.min.js') }}"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <div class="wrapper">
          <div>
              <a href="https://vnexpress.net">
                  <div>
                      Vnexpress
                  </div>
              </a>
          </div>
          <div>
              <a href="https://tinhte.vn">
                  <div >
                      Tinhte
                  </div>
              </a>
          </div>
          <div >
              <header class="title" style="margin-left: 30%" >
                  Finn
              </header>
              <form>
                  <input type="text" name="search" placeholder="Search..">
              </form>
          </div>
          <div >
              <img src={{session('avatar')}}>
              <h4>{{session('name')}}</h4>
              <div class="log">
                  <form method="post" action="{{action('UserController@logout')}}">
                          {{csrf_field()}}
                      <button type="submit" class="btn btn-success">
                              Logout
                      </button>
                  </form>
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
</html>
