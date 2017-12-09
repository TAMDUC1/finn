<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finn</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
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
            <li>
                <form method="post" action="{{action('UserController@logout')}}">
                    {{ csrf_field() }}
                    <div class="logout-button">
                        <label>
                            <button type="submit" class="btn btn-success" style="margin-left:38px">Log out</button>
                        </label>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-6" id="left-half">
            <h1>
                You are logged in
            </h1>
            <h2>
                Here you can post your advertisement
            </h2>
            <div id="test">
                <form method="post" action="{{url('blogs')}} " id="register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    {{csrf_field()}}
                    <div class="left-form"  >
                        <label for="title">Title</label>
                        <input
                                type="text"
                                class="form-control"
                                name="title"
                                id="title"
                        >
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input
                                type="text"
                                class="form-control"
                                name="content"
                                id="content"
                                style="height:200px;font-size:14pt;"
                        >
                        </input>
                    </div>
                    <div class="submit-button">
                        <button type="submit" class="btn btn-primary" style="margin-left:38px">Submit</button>
                    </div>
                </form>
            </div>
            <form method="post" action="{{url('blogs')}} " id="usrform">
                {{csrf_field()}}
                <div class="left-form">
                    <label for="title">Title</label>
                    <input
                            type="text"
                            class="form-control"
                            name="title">
                    </input>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input
                            type="text"
                            class="form-control"
                            name="content"
                            style="height:200px;font-size:14pt;"
                    >
                    </input>
                </div>
                <div class="submit-button">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-sm-6" id="right-half">
            <h1>
                Your post
            </h1>
            <div id="postBlog"></div>
            <h2>
                @foreach($blog as $b)
                    <div class="row">
                        <div>
                            Title:
                            {{$b['title']}}
                        </div>
                        <div class="content"><p5>Content:</p5>
                            {{$b['content']}}
                        </div>
                        <div> User_id: {{$b['user_id']}}</div>
                    </div>
                @endforeach
            </h2>
        </div>
    </div>
</div>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $('#register').submit(function () {
            var bTitle = $('#title').val();
            var bContent = $('#content').val();

            $.post('blogs',{ title: bTitle, content : bContent},function () {
                console.log(data);
                $('#postBlog').html(data);

            })
        })

    })
</script>
</body>
</html>
