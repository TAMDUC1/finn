<!-- create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Upload page for Admin </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Upload products </h2><br  />
    <form method="post" action="{{url('products')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="type">Type:</label>
                <input type="text" class="form-control" name="type">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="model">Model:</label>
                <input type="text" class="form-control" name="model">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="purchase_price">Purchased Price:</label>
                <input type="text" class="form-control" name="purchase_price">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="sale_price">Sale Price:</label>
                <input type="text" class="form-control" name="sale_price">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="unit_in_stock">Units in Stock:</label>
                <input type="text" class="form-control" name="unit_in_stock">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="descriptions">Descriptions:</label>
                <input type="text" class="form-control" name="descriptions">
            </div>
        </div>
        <input type="file" name="photo">
       <!-- <form action="upload.php" method = "POST" enctype="multipart/form-data">
        </form> -->
        </div>
        <div class="row">
        <div class="col-md-4"></div>
         <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Product</button>
         </div>
        </div>
    </form >
</div>
</body>
</html>