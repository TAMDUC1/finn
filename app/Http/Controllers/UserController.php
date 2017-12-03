<?php

namespace App\Http\Controllers;
use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function login()
    {
        return view('user.login');
    }
    public function signin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        //  if (Auth::attempt(['email' =>$request->email, 'password' => $request->password]))
        //$credentials['password'] = bcrypt($credentials['password']);
        // Attempt to login the user
        // TODO: can phai xac thuc email va password hop le thi moi login
        // var_dump('tamsieunhan');die;
        //$request->session()->flush();
        if (Auth::attempt($request->only('email','password')))
        {
            $id = Auth::id();
            session(['user_id' => $id]);
            //var_dump('tamsieunhan');die;
            //  return view('user.profile');
            return redirect()->route('profile');
            //->with('Welcome!');
            // return redirect()->intended(route('users.home'));
        }
          // var_dump('tamsieunhan');die;
            return view ('user.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('root');
    }

    public function home()
    {
     return view('user.home');
    }
    public function profile()
    {
        $id= Session::get('user_id');
        //  $user=Auth::user();
        //if(auth::user()){
        //  return view('user.profile');
        //}
        // TODO: Man hinh nay chi co user login moi xem duoc
        // Can doc session ra xem co user hop le hay khong?
        // Neu khong hop le thi quay ve login
        // $user_id = Get data from session
        // $user = Lay data tu bang User dung $user_id
        // if $user khac null
        // redirect ve login
        // else
        // return view profile
        //  $blog = Blog::all()->toArray();
        $blog = Blog::where('user_id', $id)
            ->orderBy('title', 'desc')
            ->take(10)
            ->get();
        // var_dump($blog);die();
        // $blog = DB::table('blogs')
        //
        //   ->where('user_id', '=', $id)
        // ->get();
        return view('user.profile',compact('blog'));
    }
    public function post()
    {
          return view('user.post');
    }
    public function index()
    {
       // $user = User::all()->toArray();
      //  return view('user.index', compact('user'));
        $user = DB :: table('users')->paginate(15);

        return view('user.index',compact('user'));






    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');// create content

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* var_dump($request->email);
        var_dump($request->password);
        die;*/

        $user = $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'password'=>'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $user['password'] = bcrypt($user['password']);

        User::create($user);
        return back()->with('success','User has been added');;
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
        $user = User::find($id);
        return view('user.edit',compact('user','id'));

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
        $user = User::find($id);
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password'=>'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user['password'] = bcrypt($user['password']);
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->save();
        return redirect()->route('root')->with('success','User has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('user')->with('success','User has been  deleted');
    }
}
