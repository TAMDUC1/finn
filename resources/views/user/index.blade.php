<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-md-12" id="nav_bar" style="background-color: #f6ffff">
            <ul>
                 <span>
                    <a href="{{route('root')}}">Home</a>
                </span>

                <span>
                    <a href="{{route('blogs.index')}}">Post</a>
                </span>

            </ul>
        </div>
    <br/>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        <br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $U)
            <tr>
                <td>{{$id=$U->id}}</td>
                <td>{{$name=$U->name}}</td>
                <td>{{$email=$U->email}}</td>
                <td>{{$phone=$U->phone}}</td>
                <td>{{$address=$U->address}}</td>
                <td><a href="{{action('UserController@edit', $id=$U->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{action('UserController@handleProviderCallback')}}" class="btn btn-warning">Xem</a></td>
                <td>
                    <form action="{{action('UserController@destroy', $id=$U->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        {{$user->links()}}
        </tbody>
    </table>
</div>
{{$user->links()}}
</body>

