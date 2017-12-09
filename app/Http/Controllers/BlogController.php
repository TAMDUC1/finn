<?php

namespace App\Http\Controllers;
use App\User;
use App\Blog;
use Illuminate\Http\Request;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

       // $blogCount = $_COOKIE['blogCount'];
        $blog_count =1;
        $blog = Blog::all()->toArray();
        $blog1 = array_slice($blog,0,2);
       // $blog = Blog::orderBy('created_at','desc');
       // var_dump($blog);die();
        $user = User::all()->toArray();
        return view('blog.index',compact('blog1'));
       // var_dump(blog);die();
    }
    public function index1()
    {
        // var_dump();die();
        //HERE get the blognewcount from the index to make the new array

        //  $blogNewCount = $_POST['blogNewCount'];
        // var_dump();die();
      // echo $blogNewCount;

         echo "abc";


         //echo "blogcount la :";
         //echo $_COOKIE["blogCount"];
         // var_dump();die();
         //   echo $_POST['blogCount'];
         // echo $_COOKIE['blogCount'];
        // echo $blogNewCount;
        /* $blogCount = $_POST['blogNewCount'];;
        $blog = Blog::all()->toArray();
        $blog1 = array_slice($blog,0,$blogCount);
        foreach ($blog1 as $b) {
            echo "<p>Title: ";
            echo $b['title'] ;
            echo "</p>" ;
            echo "<p>Content: ";
            echo $b['content'];
            echo "</p>" ;
            echo "<p>From User: ";
            echo $b['user_id'] ;
            echo "</p>" ;
        }
    */


        $user = User::all()->toArray();
        return compact('blog1') ;
        // var_dump(blog);die();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');// create content
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // var_dump('tamsieunhan');die;
        $user = User::all()->toArray();
        $blog = $this->validate(request(),[
            'title' => 'required',
            'content'=>'required'

        ]);
         $blog['user_id'] = session('user_id');// user_id trong user chi co ghi la id lam sao session lay duoc
        // vs bien la user_id?
         // luu user_id vao trong bang blog
         // var_dump($blog);die;
         Blog::create($blog);
         //  var_dump('tamsieunhan');die;
         // $blog->save();
        return back()->with('success','Blog has been added');;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit',compact('blog','id'));
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
        //$blog = Blog::find($id);
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
        ]);
      /**  $blog->title = $request->get('title');
        $blog->content = $request->get('content');
        $blog->save();*/
        return redirect('blog')->with('success','Blog has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog -> delete();
        return redirect('blog')->with('success','Blog has been  deleted');
    }
}
