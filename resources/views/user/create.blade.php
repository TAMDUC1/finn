<!-- create.blade.php.php -->

<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <title>Finn </title>
</head>
<body>
<div class="nav">
    <ul>
        <li>
            <a href="{{route('root')}}">Home</a>
        </li>
        <li>
            <a href="{{route('login')}}">Log in</a>
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
    <div class="col-md-12">
    </div>
    <div class="log">
        <div class="container">
            <h2>Sign Up</h2><br  />
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
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
    </div>
</div>
</body>
</html>