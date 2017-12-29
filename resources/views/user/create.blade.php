<!-- create.blade.php.php -->
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <meta charset="utf-8">
    <link href="{{ asset('css/signUp.css') }}" rel="stylesheet">

    <title>Finn </title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid"style="background-color: #f6ffff">
            <ul class="nav navbar-nav" >
                <li>
                    <a href="{{route('root')}}">Finn</a>
                </li>
                <li>
                    <a href="{{route('login')}}">Login</a>
                </li>
                <li>
                    <a href="{{route('users.index')}}">Admin</a>
                </li>
                <li>
                    <a href="{{route('blogs.index')}}">Post</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main-container">
        <div>
        </div>
        <div class="nested">

            <h2>Sign Up</h2><br />
            <div>
                    <form method="post" action="{{url('users')}}" id="register" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{csrf_field()}}
                        <div>
                            <div style="border-color: #5bc0de">
                                <label for="name">Name:</label>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="name" id="name" style="border-color: #5bc0de;border-radius: 5px"/>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="email">Email</label>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="email" id="email" style="border-color: #5bc0de;border-radius: 5px"/>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="password">Password</label>
                            </div>
                            <div>
                                <input type="password" class="form-control" name="password" id="password" style="border-color: #5bc0de;border-radius: 5px"/>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="phone">Phone</label>
                            </div>
                            <div>
                                <input type="tel" class="form-control" name="phone" id="phone" style="border-color: #5bc0de;border-radius: 5px"/>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="address">Address</label>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="address" id="address" style="border-color: #5bc0de;border-radius: 5px"/>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn"  value="Resgister">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        <div>
            <div class="fail">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br />
                @endif
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                    <br />
                @endif
            </div>
        </div>
    </div>
    <div class=" footer"style="background-color: #efefef">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, rem, vitae? Accusamus blanditiis ducimus eum hic id natus odit quisquam sint tempora voluptate? Ad, adipisci alias amet autem consequuntur cupiditate, distinctio dolores, doloribus eligendi explicabo harum hic impedit ipsum maxime nemo nisi nulla odio omnis placeat quae quibusdam sunt veniam.
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $(document).ready(function ()
        {
            $('#register').submit(function ()
            {
                var aName = $('#name').val();
                var aEmail = $('#email').val();
                var aPassword = $('#password').val();
                var aPhone = $('#phone').val();
                var aAddress = $('#address').val();
               $.post('users',{name: aName,mail: aEmail, password: aPassword, phone: aPhone, address: aAddress }, function()
               {
                    console.log(data);
                    $('#postRequestData').html(data);
               });
            });
        })
    </script>
</body>
</html>


