<!-- index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        $('delete').click(function() {
            if(confirm('Are you sure'))
                document.location = 'ProductController@destroy';
        });
    </script>
    <link href="{{ asset('css/userIndex.css') }}" rel="stylesheet">
</head>
<body>
<div class="navbar">
    <ul >
        <li>
            <a href="{{route('root')}}">Finn</a>
        </li>
        <li>
            <a href="{{route('users.create')}}">Sign Up</a>
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
<div class="icon">
    <div>
    </div>
    <div class="col">
        <a href="{{route('profile')}}">
            <img src={{session('avatar')}}>
        </a>
        <h4>{{session('name')}}</h4>
        <div class="log">
            <form method="post" action="{{action('UserController@logout')}}">
                {{csrf_field()}}
                <button type="submit" class="btn">
                    Logout</button>
            </form>
        </div>
    </div>

</div>
<div class="container">
    <div class="row">
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
                <th>LFT</th>
                <th>RGT</th>
                <th>Photo</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $P)
                <tr>
                    <td>{{$id = $P->id}} </td>
                    <td>{{$name = $P->name}} </td>
                    <td>{{$type = $P->type}} </td>
                    <td>{{$model = $P->model}} </td>
                    <td>{{$purchase_price = $P->purchase_price}} </td>
                    <td>{{$sale_price = $P->sale_price}} </td>
                    <td>{{$unit_in_stock = $P->unit_in_stock}} </td>
                    <td>{{$descriptions = $P->descriptions}} </td>
                    <td>{{$lft = $P->lft}} </td>
                    <td>{{$rgt = $P->rgt}} </td>
                    <td><div class="img"><img src="{{$P->photo}}" width="35" height="40"></div></td>
                    <td>
                        <form  method="post" >
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit" id="delete"
                            >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            {{ $product->links() }}
            </tbody>
        </table>
    </div>
{{$product->links()}}
</body>
