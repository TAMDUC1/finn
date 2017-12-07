<div class="form-group">
    <label for="content">Content</label>
    <input
            type="text"

            class="form-control"
            name="content"
            style="height:200px;font-size:14pt;"
    >
    </input>

</div>

<td>{{$user['id']}}</td>
<td>{{$user['name']}}</td>
<td>{{$user['email']}}</td>
<td>{{$user['phone']}}</td>
<td>{{$user['address']}}</td>
<td><a href="{{action('UserController@edit', $user['id'])}}" class="btn btn-warning">Edit</a></td>
<td>
    <form action="{{action('UserController@destroy', $user['id'])}}" method="post">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
</td>
<link href="{{ asset('css/themebootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" >

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<td>{{$P['id']}}</td>
<td>{{$P['name']}}</td>
<td>{{$P['type']}}</td>
<td>{{$P['model']}}</td>
<td>{{$P['purchase_price']}}</td>
<td>{{$P['sale_price']}}</td>
<td>{{$P['unit_in_stock']}}</td>
<td>{{$P['descriptions']}}</td>
<td>{{$P['lft']}}</td>
<td>{{$P['rgt']}}</td>
<td><div class="img"><img src="{{$P['photo']}}" width="35" height="40"></div></td>
<td><form action="{{action('ProductController@destroy',$P['id'])}}" method="post" >
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
</td>


<td>{{$P['id']}}</td>
<td>{{$P['name']}}</td>
<td>{{$P['type']}}</td>
<td>{{$P['model']}}</td>
<td>{{$P['purchase_price']}}</td>
<td>{{$P['sale_price']}}</td>
<td>{{$P['unit_in_stock']}}</td>
<td>{{$P['descriptions']}}</td>
<td>{{$P['lft']}}</td>
<td>{{$P['rgt']}}</td>
<td><div class="img"><img src="{{$P['photo']}}" width="35" height="40"></div></td>
<td>
    <form action="{{action('ProductController@destroy',$P['id'])}}" method="post" >
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>



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

action="{{action('ProductController@destroy',$P->id)}}"