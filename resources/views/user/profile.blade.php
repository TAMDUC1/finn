<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/newProfile.css')}}" rel="stylesheet">
    <title>Finn</title>
</head>
<body>
    <nav>
            <ul >
                <li>
                    <a href="{{route('root')}}">Finn</a>
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
    </nav>
    <div class="container" id="container">
        <div >
        <div class="form">
            <div class="test" id="test">
                <form id="register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{csrf_field()}}
                    <div class="left-form" >

                        <label for="title"style="color: #1c679c">Title</label>
                        <div>
                            <input
                                    type="text"
                                    class="form-control"
                                    name="title"
                                    id="title"
                                    style="border-color: #1c679c"
                            >
                            </input>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="content"style="color: #1c679c">Content</label>
                        </div>
                        <div>
                            <input
                                    type="text"
                                    class="form-control"
                                    name="content"
                                    id="content"
                                    style="height:200px;font-size:14pt;border-color: #1c679c"
                            >
                            </input>
                        </div>
                    </div>
                    <div class="submit-button">
                        <button type="submit" class="btn " style="margin-left:38px" id="sm" ONCLICK="myFunction()">Submit</button>
                    </div>
                </form>
                <form method="post" action="{{action('BlogController@deleteAll')}}">
                    {{ csrf_field() }}
                    <div class="delete_button">
                        <label>
                            <button type="submit" class="btn " style="margin-left:38px">deleteAllBlogs</button>
                        </label>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div>
           <h3 style="color: #1c679c">
               Your Post
           </h3>
            <div class="blogPost" id="blogPost" title="Your Post" >
            </div>
        </div>
        <div >
        <img src={{session('avatar')}}>
        <form method="post" action="{{action('UserController@logout')}}">
            {{ csrf_field() }}
            <div class="logout-button">
                <label>
                    <button type="submit" class="btn" >Log out</button>
                </label>
            </div>
        </form>
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
      /*  var node = document.createElement("LI");
        var textnode1 = document.createTextNode("Title :"+bTitle+"\n");// chua co lay tu database
        var textnode2 = document.createTextNode("Content :"+bContent);// day la lay truc tiep gia tri khi input
        node.appendChild(textnode1);
        node.appendChild(textnode2);
        document.getElementById("myList").appendChild(node);
        1 dong code duoi thay cho 5 dong code tren
        */
        $('#blogPost').prepend('Title la :'+bTitle +' '+'Content la: '+ bContent);
        $('#blogPost').prepend("<tr/>");
    }

    // $('#myList').append(bTitle+'1');
    $(document).ready(function () {
      //  $('input[type="text"]').addClass('highLight');
        $.ajax
        (
            {
                dataType: 'json',
                url:'getBlog',
                success:function(data){
                    $.each(data,function (i,value)
                    {
                        var tr =$("<tr/>");
                            tr.append($("<td/>",
                            {
                            text : " Title la :" + value.title + " content la : " + value.content
                            }))

                        $('#blogPost').prepend(tr);
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
          //  $('input[type="text"]').removeClass('highLight');
            $('input[type="text"]').toggleClass('highLight');
            // $('#container').toggle(.hi)
            $('#blogPost').css({
                'color':'red',
                'grid-template-columns':'1fr'
            }
        )
            console.log('qua dc');
            $.get("{{URL:: to('blog/read-data')}}",function (data) {
               console.log(data);
           })
        });
    })

</script>

</body>
</html>
