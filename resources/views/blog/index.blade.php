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
            $('#getRequest').click(function ()
            {
               $.get('index1',function (data) {
                   $('#comments').append(data);
                   console.log(data);
               })
            })
            $(function()
            {
                //----- OPEN
                $('[data-popup-open]').on('click', function(e)  {
                    var targeted_popup_class = jQuery(this).attr('data-popup-open');
                    $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

                    e.preventDefault();
                });

                //----- CLOSE
                $('[data-popup-close]').on('click', function(e)  {
                    var targeted_popup_class = jQuery(this).attr('data-popup-close');
                    $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

                    e.preventDefault();
                });
            });

            $('.sendMail').on('click',function (e) {
                $partner_id =
                $('#mail').html(
                    "<div>Send Mail</div>" +
                    "<div >"+
                        "Title" +
                        " <input\n" +
                        "                                    type=\"text\"\n" +
                        "                                    class=\"form-control\"\n" +
                        "                                    name=\"title\"\n" +
                        "                                    id=\"title\"\n" +
                        "                                    style=\"border-color: #1c679c\"\n" +
                        "                            >\n" +
                        "                            </input>" +
                        "<div>Content</div>"
                        +"<input\n" +
                        "                                    type=\"text\"\n" +
                        "                                    class=\"form-control\"\n" +
                        "                                    name=\"content\"\n" +
                        "                                    id=\"content\"\n" +
                        "                                    style=\"height:200px;font-size:14pt;border-color: #1c679c\"\n" +
                        "                            >\n" +
                        "                            </input>"+
                        "<button type=\"submit\" class=\"btn \" style=\"margin-left:38px\" id=\"sm\" ONCLICK=\"myFunction()\">Send</button>\n"+
                    "</div>"

                );
                e.preventDefault();
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

            <div class="luacon2" >
                @foreach($blog1 as $b)
                    <div class="block">
                        <div class="block1">
                            <p title="Title" style="background-color: #0b138b;color: white">{{$b['title']}}</p>
                        </div>
                        <p>{{$b['content']}}</p>
                        <a href="{{route('mails.create')}}" style="text-decoration: none" class="sendMail">User{{$b['user_id']}}</a>
                        <a class="btn" data-popup-open="popup-1" href="#">Open Blog</a>
                    </div>
                @endforeach
            </div>
            <div class="luachon3">
                <a href="{{route('profile')}}">
                    <img src={{session('avatar')}}>
                </a>                    <h4>{{session('name')}}</h4>
                    {{session('user_id')}}
                <div class="log">
                    <form method="post" action="{{action('UserController@logout')}}">
                        {{csrf_field()}}
                        <button type="submit" class="btn">
                            Logout
                        </button>
                    </form>
                </div>
                <div id="mail">
                    send mail
                </div>

            </div>
    </div>
    <div class="popup" data-popup="popup-1">
        <div class="popup-inner">
            <p>amazing</p>
            <p><a data-popup-close="popup-1" href="#">Close</a></p>
            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
        </div>
    </div>
</body>
</html>