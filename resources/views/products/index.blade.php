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
            <ul> <span>
                    <a href="{{route('root')}}">Home</a>
                </span>
                <span>
                    <a href="{{route('users.create')}}">Sign Up</a>
                </span>
                <span>
                    <a href="{{route('login')}}">Login</a>
                </span>
                <span>
                    <a href="{{route('users.index')}}">Admin</a>
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
                <th>Prod_ID</th>
                <th>Name</th>

                <th>Type</th>
                <th>Model</th>
                <th>Purchased price</th>
                <th>Sale price</th>
                <th>Units in stock</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $P)
                <tr>
                    <td>{{$P['id']}}</td>
                    <td>{{$P['name']}}</td>
                    <td>{{$P['type']}}</td>
                    <td>{{$P['model']}}</td>
                    <td>{{$P['purchase_price']}}</td>
                    <td>{{$P['sale_price']}}</td>
                    <td>{{$P['unit_in_stock']}}</td>
                    <td>{{$P['descriptions']}}</td>
                    <td><div class="img"><img src="{{$P['photo']}}" width="35" height="40"></div></td>
                    <td><form action="{{action('ProductController@destroy',$P['id'])}}" method="post" >
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
