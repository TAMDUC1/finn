<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet" type="text/css" >
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
<section class="container">
<div class="left-half">
    <h1>
        You are logged in
    </h1>
    <h2>
        Here you can post your advertisement
    </h2>
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
    <form method="post" action="{{action('UserController@logout')}}">
        {{ csrf_field() }}
        <div class="logout-button">
            <label>
                <button type="submit" class="btn btn-success" style="margin-left:38px">Log out</button>
            </label>
        </div>
    </form>
</div>
    <div class="right-half">
     <h1>
    Your post
        </h1>
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
</section>
</body>
</html>
