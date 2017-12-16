<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/newProfile.css')}}" rel="stylesheet">
    <title>Finn</title>

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
                <form id="register">
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
                        <button type="submit" class="btn btn-primary" style="margin-left:38px" id="sm" ONCLICK="myFunction()">Submit</button>
                    </div>
                </form>
                <form method="post" action="{{action('BlogController@deleteAll')}}">
                    {{ csrf_field() }}
                    <div class="delete_button">
                        <label>
                            <button type="submit" class="btn btn-success" style="margin-left:38px">deleteAllBlogs</button>
                        </label>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6" id="right-half">
            <h1>
                 your new posts
            </h1>
            <div class="blogabc">
                <ul id="myList">
                </ul>
            </div>
            <h1>
                your last posts
            </h1>
            <div id="blogPost">

            </div>
        </div>
    </div>
    <div class="row">

    </div>
</div>
<script type="text/javascript">
    var thedata = '{"name":"tam","age":"31"}';
    var obj =JSON.parse(thedata);
    var ErrorMessage = 'Error roi';
    var neededData;
    //document.getElementById("blogPost").innerHTML = obj.name;
    console.log('123');
  //  $('#blogPost').innerHTML = obj.name;
    console.log('123');
    $.ajaxSetup({
        headers:
            {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    console.log('444');
    var node = document.createElement("LI");
    function myFunction() {
        var bTitle = $('#title').val();
        var bContent = $('#content').val();
        var node = document.createElement("LI");
        var textnode1 = document.createTextNode("Title :"+bTitle+"\n");// chua co lay tu database
        var textnode2 = document.createTextNode("Content :"+bContent);// day la lay truc tiep gia tri khi input
        node.appendChild(textnode1);
        node.appendChild(textnode2);
        document.getElementById("myList").appendChild(node);
    }
    $(document).ready(function () {
        $.ajax
        (
            {
                dataType: 'json',
                url:'getBlog',
                success:function(data){
                    console.log(data);
                    console.log('vai');
                    $.each(data,function (i,value) {
                        var tr =$("<tr/>");
                            tr.append($("<td/>",{
                            text : " Title la :" + value.title + " content la : " + value.content
                            }))
                        console.log(tr);
                        $('#blogPost').append(tr);
                    })
                },
                error: function (jqXhr,textStatus,errorMessage)
                {
                    $('#blogPost').append('Error')
                }
            })
        $('#register').submit(function (event)// save blogs
        {
            event.preventDefault();
            var bTitle = $('#title').val();
            var bContent = $('#content').val();
            console.log('123');
            $.post('blogs',{ title: bTitle, content : bContent},function (data)
            {
                console.log(data);
                console.log(data.content);
                console.log(data.title);
              //  $('#blogPost').html("Title:" + data.title +" content: " + data.content);
               // cau lenh dung se bi delete cac post cu trong hien thi
            })
        })
        $('#sm').click(function ()
        {
            console.log('qua dc');
            $.get("{{URL:: to('blog/read-data')}}",function (data) {
               console.log(data);
           })
        });
    })
</script>
</body>
</html>
