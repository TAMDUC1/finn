<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finn</title>
</head>
<body>
<div class="nav">
        <ul>
            <li>
                <a href="{{route('root')}}">Home</a>
            </li>
            <li>
                <a href="{{route('users.create')}}">Sign Up</a>
            </li>

            <li>
                <a href="{{route('users.index')}}">Admin</a>
            </li>
            <li>
                <a href="{{route('blogs.index')}}">Post</a>
            </li>
        </ul>
</div>
<div class="screen">
    <h2>
        <a >Finn</a>
    </h2>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Login
            </h3>
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
    </div>
    </div>
</div>
</body>
</html>