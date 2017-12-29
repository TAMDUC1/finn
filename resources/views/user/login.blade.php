<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <title>Finn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="https://connect.facebook.net/en_US/all.js"></script>
    <link href="{{asset('css/login1.css')}}" rel="stylesheet">
</head>
<body onload="startTime()">
    <nav class="navbar navbar-default" id="closenav" style="background-color: #f6ffff">
       <div class="container-fluid"  onclick ="toggleNav()">

           <ul class="nav navbar-nav">
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
               <li>
                   <div class="date" id="txt" style="color: #0c092a" >
                   </div>
               </li>
           </ul>
       </div>
    </nav>
        <div class="main-container">
            <div></div>
            <div class="row">
                <div>
                </div>
                <div class="log">
                    <form method="post" action="{{action('UserController@signin')}}">
                    {{csrf_field()}}
                        <div>
                            <label for="email">Email</label>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="email"id="searchEmail" autocomplete="on" style="border-color: #5bc0de;border-radius: 5px">
                        </div>
                        <div>
                            <label for="password">Password</label>
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password"style="border-color: #5bc0de;border-radius: 5px">
                        </div>
                        <div>
                            <button type="submit" class="btn"">Login</button>
                        </div>
                    </form>
                </div>
                <div>
                    <a href="{{route('redirectToProvider')}}" class="btn btn-primary" data-scope="email">Google</a>
                </div>
                <div>
                  <a href="{{route('redirect')}}" class="btn btn-primary" data-scope="email">Facebook</a>
                </div>
                                          {{-- javascript login
                                            <div>
                                                        <button onclick="login();">
                                                            Facebook login
                                                        </button>
                                                    </div>
                                                     <div>
                                                         <button onclick="logout();">
                                                             Facebook logout
                                                         </button>
                                                     </div>
                                           --}}
                <div class="signup">
                    <a href="{{route('users.create')}}"style="text-decoration: none">Or sign up here</a>
                </div>
            </div>
            <div></div>
        </div>
<script type="text/javascript">

    // login by javascript----


   // window.fbAsyncInit = function() {
       FB.init({
            appId            : '891006804401694',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.11'
        });
    //};
    FB.getLoginStatus(function (response) {
        console.log('99999');
        if(response.status==='connected'){
            document.getElementById('java').innerHTML ='Ok you are connected to our Website via facebook acc';
        } else if(response.status==='not_authorized'){
            document.getElementById('java').innerHTML ='You are not connected via facebook';
        }else{
            document.getElementById('java').innerHTML ='You are not connected via facebook';
        }
    });
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
    function login() {
        FB.login(function (response) {
            if(response.status==='connected'){
                document.getElementById('java').innerHTML ='Ok you are connected to our Website via facebook acc';
            } else if(response.status==='not_authorized'){
                document.getElementById('java').innerHTML ='You are not connected via facebook';

            }else{
                document.getElementById('java').innerHTML ='You are not connected via facebook';
            }
        });
    }
    function logout() {
        FB.logout(function (response) {

        });

    }
    // end----



    console.log('1222');
    $.ajaxSetup({
        headers:
            {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    $(document).ready(function ()
    {
        console.log('444');
        $('#searchEmail').keypress(function ()
        {
            console.log('1232222');
            $.ajax
            ({
                dataType: 'json',
                url:'searchName',// logic tren serve
                success:function(data)
                {
                    console.log('4444');
                    console.log(data.email);
                }
            })
        });
    })


</script>
<script>
</script>
</body>
</html>