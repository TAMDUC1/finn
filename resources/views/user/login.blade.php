<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <title>Finn</title>
    <link href="{{asset('css/login1.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
</head>
<body onload="startTime()">
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
                           <a
                               href="#">List1
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
           </ul>
       </div>

    </nav>
        <div class="main-container" >
               <article class="index-intro">
                        <div class="container">
                            <div class="jumbotron">
                                <h1>This is a intro header of my site</h1>
                                <p> er beskyttet etter åndsverksloven. Bruk av automatiserte tjenester (roboter, spidere, indeksering m.m.) samt andre fremgangsmåter for systematisk eller regelmessig bruk er ikke tillatt uten eksplisitt samtykke fra FINN.no.

                                              © 1996–2017 FINN.no AS</p>
                            </div>
                        </div>
               </article>
               <div class="container-fluid">
                        <div class="row">
                                 <div class="col-sm-2 left1">
                                     <a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                         <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                                     </a>
                                 </div>
                                 <div class="col-sm-2 left2">
                                     <a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                         <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                                     </a>
                                 </div>
                                 <div class="col-sm-4 center">
                                        <h3>Login</h3>
                                        <div class="log">
                                            <form method="post" action="{{action('UserController@signin')}}">
                                            {{csrf_field()}}
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" name="email" placeholder="TagName"id="searchEmail" autocomplete="on">
                                            <label for="password">Password:</label>
                                            <input type="password" class="form-control" name="password">
                                            <button type="submit" class="btn btn-success" style="margin-left:38px">Login</button>
                                            </form>
                                        </div>
                                        <div class="signup">
                                            <a href="{{route('users.create')}}">Or sign up here</a>
                                        </div>
                                 </div>
                                 <div class="col-sm-2 right1" ><a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                         <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                                     </a>
                                 </div>
                                 <div class="col-sm-2 right2"><a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                         <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                                     </a>
                                 </div>
                </div>
            </div>
            <div class="gallery" >
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-sm-2 b1"><a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                            </a>
                        </div>
                        <div class="col-sm-2 b2"><a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                            </a>
                        </div>
                        <div class="col-sm-2 b3"><a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                            </a>
                        </div>
                        <div class="col-sm-2 b4"><a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                            </a>
                        </div>
                        <div class="col-sm-2 b5"><a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                            </a>
                        </div>
                        <div class="col-sm-2 b6">
                            <a href="https://source.unsplash.com/RF5sv5dv1Zc/1500x1000" data-fancybox data-caption="This image has a caption">
                                <img src="https://source.unsplash.com/RF5sv5dv1Zc/240x160" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            </p>


        </div>
<script type="text/javascript">
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
    var getDate = new Date();
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    var date = Date();
    var navStatus = true;
    function toggleNav() {
        if (navStatus == true){
            document.getElementById("closenav").style.top = "0px";
            navStatus = false;
        }
        if (navStatus == false){
            document.getElementById("closenav").style.top = "0px";
            navStatus = true;
        }
    }
</script>
</body>
</html>