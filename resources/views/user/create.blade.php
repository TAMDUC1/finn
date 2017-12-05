<!-- create.blade.php.php -->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <meta charset="utf-8">
    <link href="{{asset('css/login1.css')}}" rel="stylesheet">
    <title>Finn </title>
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
                        <a href="{{route('login')}}">Login</a>
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
                                <a href="#">List1
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
            <div class="row">
                <div class="col-sm-2 left">
                        <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                </div>
                <div class="col-sm-2 left">
                    <img class="img-responsive img-rounded img-thumbnail" src="image/avatar.png">
                </div>
                <div class="col-sm-4 center">
                            <h2>Sign Up</h2><br  />
                            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                            <br />
                            @endif
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ \Session::get('success') }}</p>
                                </div>
                            <br />
                             @endif
                        <form method="post" action="{{url('users')}}">
                            {{csrf_field()}}
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name"/>
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email"/>
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password"/>
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" name="phone"/>
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address"/>
                            <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button>
                         </form>
                    </div>
                <div class="col-sm-4 right">
                </div>
            </div>
    </div>
    <div class="gallery">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>

</body>
</html>