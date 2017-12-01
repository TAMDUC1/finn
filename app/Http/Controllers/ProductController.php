<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //var_dump();die();
        $product = Product::all()->toArray();
        // $blog = Blog::orderBy('created_at','desc');
        // var_dump($blog);die();
        $user = User::all()->toArray();
        return view('products.index',compact('product') );
        // var_dump(blog);die();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $product = $this->validate(request(),[
            'name' => 'required',
            'type'=>'required',
            'model'=>'required',
            'purchase_price'=>'required',
            'sale_price'=>'required',
            'unit_in_stock'=>'required',
            'descriptions'=>'required',

        ]);

        // todo: upload image here

        $file = $_FILES['photo'];
        $fileName = $_FILES['photo']['name'];
        $fileTmpName = $_FILES['photo']['tmp_name'];
        $fileSize = $_FILES['photo']['size'];
        $fileError = $_FILES['photo']['error'];
        $fileType = $_FILES['photo']['type'];
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png');
        if (in_array($fileActualExt,$allowed)) {
            if($fileError===0){
                if($fileSize<1000000){
                    $fileNameNew= uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'storage/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $product['photo']= $fileDestination;
                    //  var_dump($product['photo']);die();
                    //var_dump($fileDestination);die();
                }else{
                    echo "Your file is too big";
                }
            }else{
                echo "There was an error";
            }
        } else{
            echo "you cant upload files of this type";
        }
       // var_dump($product['photo']);die();


        Product::create($product);
       // var_dump($product);die();
        return back() ->with('nice');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$product = Product :: find($id);
        $this->validate(request(), [
            'name' => 'required',
            'type'=>'required',
            'model'=>'required',
            'purchase_price'=>'required',
            'sale_price'=>'required',
            'unit_in_stock'=>'required',
            'descriptions'=>'required',
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // var_dump($product); die();
        $product = Product :: find($id);
        $product -> delete();
        return redirect('products.index')->with('success');
    }
}
