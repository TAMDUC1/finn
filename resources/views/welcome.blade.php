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
                                    <div class="navbar-header">
                                        <a class="navbar-brand" href="{{route('root')}}">Finn
                                        </a>
                                    </div>
                                </li>
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
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa nesciunt veritatis. At autem, distinctio ea eum exercitationem, incidunt iste magni non porro ratione reprehenderit, sed sint voluptatibus. Amet, culpa.
                  </div>
                  <div>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab fuga fugit ipsam itaque minus neque optio perspiciatis quo unde! A aliquid culpa deleniti dolorem ea eligendi eum inventore iste iure labore laboriosam necessitatibus, numquam pariatur quaerat quam, quia quis quisquam totam ullam veritatis? Corporis culpa, cum dolore eveniet excepturi fuga incidunt iusto nam, nostrum optio reiciendis, sapiente. A ab adipisci aliquid aut beatae delectus eius eligendi est et fugit ipsa ipsum laborum libero magnam maiores modi nam nemo odit, placeat reiciendis, reprehenderit sequi tempora tempore veritatis vero, voluptates voluptatum? Quis!
                  </div>
                  <div >
                      <header class="title" style="margin-left: 30%" >
                          Finn
                      </header>
                      <form>
                          <input type="text" name="search" placeholder="Search..">
                      </form>
                      <div>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores at atque consequatur dolores magnam nobis nulla pariatur? Animi aperiam commodi consequuntur culpa cum delectus deserunt dignissimos dolor et, fugit hic illum itaque optio praesentium soluta tempora vitae! Dolorem, voluptate.
                      </div>
                      <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias aliquam aperiam aspernatur aut blanditiis deserunt, dicta distinctio dolor dolorum eaque excepturi explicabo facilis iusto laboriosam libero maxime minima minus molestias non odit officia omnis optio, quia sequi tempora temporibus ullam ut velit! Assumenda hic iure laudantium molestias placeat quasi quis vero! Aliquam animi non perspiciatis placeat sed ut? A alias delectus deserunt dolore, dolorem ea est et explicabo, facere fugiat ipsum iure neque, odit officiis repudiandae? Amet aperiam commodi consectetur, debitis dignissimos distinctio, et excepturi fuga hic molestias officia omnis praesentium quae quibusdam quo sequi tempore ullam unde vero voluptate! Animi aspernatur ea enim ipsa nihil nostrum pariatur porro praesentium, quas quia quibusdam sequi totam ullam unde vitae.</div>
                  </div>
                  <div >
                      <div>
                          <a href="{{route('profile')}}">
                              <img src={{session('avatar')}}>
                          </a>
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
                      <div class="nested">
                          <div>Lorem</div>
                          <div>Lorem</div>
                          <div>Lorem</div>
                          <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio enim facilis laudantium maxime minima odio perferendis quibusdam totam, veniam. Commodi cupiditate eum fugit itaque provident, qui rerum temporibus ut velit!</div>
                      </div>
            </div>
            <script type="text/javascript">
                  $(document).ready(function ()
                  {
                    $('#blogPost').click(function ()
                    {
                        window.location = $(this).find("a").attr("href");
                        return false;
                    });
                })
            </script>
    </body>
</html>
