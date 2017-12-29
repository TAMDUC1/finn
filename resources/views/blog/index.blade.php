<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/abc.css') }}" rel="stylesheet" type="text/css" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Finn</title>
    <script type="text/javascript">
        $(document).ready(function () {
            var blogCount = 1;
            var Url = 'index1';
            $('#getRequest').click(function () {
               $.get('index1',function (data) {
                   $('#comments').append(data);
                   console.log(data);
               })
            })
        })
    </script>
</head>
<body>
    <div class="navbar">
        <ul>
            <li>
                <a href="{{route('root')}}">Finn</a>
            </li>
            <li>
                <a href="{{route('users.create')}}">Sign Up</a>
            </li>
            <li>
                <a href="{{route('login')}}">Login</a>
            </li>
        </ul>
    </div>
    <div class="container">
            <div class="luachon">
            </div>
            <div class="luacon2" >
                @foreach($blog1 as $b)
                    <div class="block">
                        <div>
                            <p title="Title" style="background-color: #0b138b;color: white">{{$b['title']}}</p>

                        </div>
                        <p>{{$b['content']}}</p>
                        <p>User {{$b['user_id']}}</p>
                    </div>
                @endforeach
            </div>
            <div class="luachon3">

                <a href="{{route('profile')}}">
                    <img src={{session('avatar')}}>
                </a>                    <h4>{{session('name')}}</h4>
                <div class="log">
                    <form method="post" action="{{action('UserController@logout')}}">
                        {{csrf_field()}}
                        <button type="submit" class="btn">
                            Logout
                        </button>
                    </form>
                </div>

            </div>
    </div>
</body>
</html>