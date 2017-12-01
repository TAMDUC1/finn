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
       //var_dump();die();
        $blog = Blog::all()->toArray();
       // $blog = Blog::orderBy('created_at','desc');
       // var_dump($blog);die();
        $user = User::all()->toArray();
        return view('blog.index',compact('blog') );
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
