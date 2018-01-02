<?php

namespace App\Http\Controllers;
use App\Blog;
use App\User;
use App\Mail;
use App\Guser;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
//use App\SocialAccountService;
use App\Http\Controllers\Userapp;


class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mails.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // var_dump('tamsieunhan');die;
        $user = User::all()->toArray();
        $mail = $this->validate(request(),[
            'title' => 'required',
            'content'=>'required'
        ]);
        $mail['user_id'] = session('user_id');// user_id trong user chi co ghi la id lam sao session lay duoc
        // vs bien la user_id?
        // luu user_id vao trong bang blog
        // var_dump($blog);die;
        Mail::create($mail);
        //  var_dump('tamsieunhan');die;
        // $blog->save();
        // $myJson = json_ecode($blog);
        return response()->json($mail);
        //  return back()->with('success','Blog has been added');





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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
