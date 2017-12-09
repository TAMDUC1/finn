<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
              <span>
                    <a href="{{route('root')}}">Home</a>
                </span>
            <span>
                 <a href="{{route('users.create')}}">Sign Up</a>
            </span>
            <span>
                 <a href="{{route('login')}}">Login</a>
            </span>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <form>
                <input type="text" name="search" placeholder="Search..">
            </form>
            <h1>Car</h1>
            <form>
                <div>
                    <input id="blah" type="checkbox"><label for="blah">Audi</label>
                </div>
            </form>
            <form>
                <div>
                    <input id="blah" type="checkbox"><label for="blah">BMW</label>
                </div>
            </form>
            <form>
                <div>
                    <input id="blah" type="checkbox"><label for="blah">ABC</label>
                </div>
            </form>
            <h1>Watch</h1>
            <form>
                <div>
                    <input id="blah" type="checkbox"><label for="blah">Seiko</label>
                </div>
            </form>
            <form>
                <div>
                    <input id="blah" type="checkbox"><label for="blah">Rolex</label>
                </div>
            </form>
            <h1>Job</h1>
            <form>
                <div>
                    <input id="blah" type="checkbox"><label for="blah">Hot Girl</label>
                </div>
            </form>
            <form>
                <div>
                    <input id="blah" type="checkbox"><label for="blah">Chili</label>
                </div>
            </form>
            <form>
                <div>
                    <input id="blah" type="checkbox"><label for="blah">Fly</label>
                </div>
            </form>
            <button type="button" class="btn btn-warning" id="getRequest">Show more Post</button>
            <button id="ajaxBtn">Show more Post</button>
        </div>
        <div id="comments" class="col-md-6 col-sm-6">
            @foreach($blog1 as $b)
                <div class="block">
                    <p>Title:{{$b['title']}}</p>
                    <p>Content:{{$b['content']}}</p>
                    <p>From user:{{$b['user_id']}}</p>
                </div>
            @endforeach

        </div>

    </div>
    <div class="col-md-2">
    </div>
</div>
</body>
</html>