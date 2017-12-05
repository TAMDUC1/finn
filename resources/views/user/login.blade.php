<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <title>Finn</title>
    <link href="{{asset('css/login1.css')}}" rel="stylesheet">
</head>
<body>
            <nav class="navbar navbar-default">
                   <div class="container-fluid">
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
                                       class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>&nbsp;Sample
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
                       </ul>
                   </div>
                </nav>
                <div class="main-container">
                   <article class="index-intro">
                        <div class="container">
                            <div class="jumbotron">
                                <h1>This is a intro header of my site</h1>
                                <p> er beskyttet etter åndsverksloven. Bruk av automatiserte tjenester (roboter, spidere, indeksering m.m.) samt andre fremgangsmåter for systematisk eller regelmessig bruk er ikke tillatt uten eksplisitt samtykke fra FINN.no.

                                              © 1996–2017 FINN.no AS</p>
                            </div>
                        </div>
                   </article>
                <div class="container-fluid">
                        <div class="row">
                                 <div class="col-sm-2">
                                     <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                                 </div>
                                 <div class="col-sm-2">
                                     <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                                 </div>
                                 <div class="col-sm-4 center">
                                        <h3>Login</h3>
                                        <div class="log">
                                            <form method="post" action="{{action('UserController@signin')}}">
                                            {{csrf_field()}}
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" name="email">
                                            <label for="password">Password:</label>
                                            <input type="password" class="form-control" name="password">
                                            <button type="submit" class="btn btn-success" style="margin-left:38px">Login</button>
                                            </form>
                                        </div>
                                     <div class="signup">
                                         <a href="{{route('users.create')}}">Or sign up here</a>
                                     </div>
                                 </div>
                                 <div class="col-sm-2">
                                          <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                                 </div>
                                 <div class="col-sm-2">
                                          <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                                 </div>
                </div>
            </div>
            <div class="gallery">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-sm-2">
                            <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                        </div>
                    </div>
                </div>
            </div>
            </div>
</body>
</html>