<?php

namespace App\Http\Controllers;
use App\Blog;
use App\User;
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

    public function redirectToProvider(){

        //$email = Socialite :: driver('google')->stateless()->user()->email;
        //session(['email'=>$email]);
        //var_dump($email); die();?
       // Socialite :: driver('google');
       //$provider_user_email = Socialite::driver('google')->user()->email;
       return Socialite :: driver('google')->redirect();
        // redirect();

    }


   public function handleProviderCallback(){
      // var_dump(Socialite::driver('google')); die();
       // $providerUser = \Socialite::driver('google')
       // ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
       //   ->user();
       //  $user = Socialite::driver('google')->user();
       // var_/*dump($user);die();
       //  try{
       $user = Socialite::driver('google')->user();
       $email = $user->getEmail();
       $name = $user->getName();
       $avatar = $user->getAvatar();
       $id = $user->getId();// id cua google
       // var_dump($id);die();
       // setup the oauth identity
       // create a new user in database if user is not found!!!
      $newUser = User::firstOrCreate(['email'=>$user->getEmail()],['name' => $user->getName()]);//id cua system
     // var_dump($newUser['id']);die();
      session(['email'=>$email,'name'=>$name,'avatar' => $avatar,'user_id'=>$newUser['id']]);
     // var_dump($newUser['id']);die();
        //   return redirect()->route('root')->with('success','User has been created');
             return redirect()->route('profile');

       // } catch (\GuzzleHttp\Exception\ClientException $e){
       //   if ($e->getResponse()->getStatusCode() == '400') {
       //     echo "Got response 400";
       //}
       //}
       //   $email = Socialite::drive('google')->stateless()->user()->email;
       // $token = $user->token;
       //$refreshToken = $user->refreshToken; // not always provided
       //$expiresIn = $user->expiresIn;
       //$guser = ['email'=> $email];
       // Guser::create($guser);
       // dd($guser);
       // var_dump($guser);
       // return $guser;
    }
    public function redirect(){
        //$email = Socialite :: driver('google')->stateless()->user()->email;
        //session(['email'=>$email]);
        //var_dump($email); die();
        // Socialite :: driver('google');
        //$provider_user_email = Socialite::driver('google')->user()->email;
        return Socialite :: driver('facebook')->redirect();
        // redirect();
    }
    public function callback()
    {
        //  var_dump('jhvbjh');die();
        $fb = new \Facebook\Facebook([
            'app_id' => '891006804401694',
            'app_secret' => '941e8f3c67e282a0ec6f4453f5637411',
            'default_graph_version' => 'v2.3',
            // . . .
               ]);
        $response = $fb->get('/me?fields=id,name,email', 'EAAMqXbARnh4BAJdQU5WlkS2iT5OYXXkExl2P0XHAz2sMadG6VZCO8YSZCYM9cCSPASF2kdh71z33oLB4S2kX3MBLAbawlH19ZCqTWN8ShRADCryI0XCiM7GYbudyCZCCOdkii80fzQuFITv43y8l1W0ZAZAEk306BjbvMtz5RGdgZDZD');
        $user = $response->getGraphUser();
        echo 'Name: ' . $user['name'].'</br>';
        echo 'ID: ' . $user['id'].'</br>';
        echo 'Email: ' . $user['email'].'</br>';
        echo 'Avatar:'.'http://graph.facebook.com/'.$user['id'].'/picture'.'</br>';
        $avatar = 'http://graph.facebook.com/'.$user['id'].'/picture';
        // echo 'URL: ' . $user['id'].'/picture';
        // var_dump($me);die();
        // create new user if needed
        $newUser = User::firstOrCreate(['email'=>$user['email']],['name' => $user['name']]);
        // session(['email'=>$email,'name'=>$name,'avatar' => $avatar,'user_id'=>$newUser['id']]);
       // var_dump($newUser['id']);die();
        session(['email'=>$user['email'],'name'=>$user['name'],'avatar'=>$avatar],['user_id'=>$newUser['id']]);
     //   var_dump($newUser['id']);die();
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_likes']; // optional
        $loginUrl = $helper->getLoginUrl('http://http://localhost:8000/callback', $permissions);
        try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (isset($accessToken)) {
            // Logged in!
            $_SESSION['facebook_access_token'] = (string) $accessToken;

            // Now you can redirect to another page and use the
            // access token from $_SESSION['facebook_access_token']
        } elseif ($helper->getError()) {
            // The user denied the request
            exit;
        }

        //  $permissions = ['email', 'user_likes']; // optional
        //$loginUrl = $helper->getLoginUrl('http://localhost:8000/singleBlog', $permissions);
      /*  try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        if (isset($accessToken)) {
            // Logged in!
            $_SESSION['facebook_access_token'] = (string) $accessToken;
            // Now you can redirect to another page and use the
            // access token from $_SESSION['facebook_access_token']
        } elseif ($helper->getError()) {
            // The user denied the request
            exit;
        } */
     //   echo 'Logged in as ' . $me->getName();
       // var_dump($fb);die();
        // when facebook call us a with token
       // $email = \Socialite :: driver('facebook')->stateless->user()->email;
      //  echo($me);
       // var_dump('erg');die();
      //  $email = $providerUser->email;
       //
        return redirect()->route('profile');

      //  return redirect()->route('root')->with('success','User has been created');
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
        Session::flush();
        return redirect()->route('login');
    }

    public function home()
    {
     return view('user.home');
    }

    public function profile()
    {
        $id = Session::get('user_id');
        if(empty($id)){
            return redirect()->route('login');
        }
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
            ->take(3)
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
        $user = DB :: table('users')->paginate(4);
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:6',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $user['password'] = bcrypt($user['password']);
        User::create($user);
        return redirect()->route('login');

       // return back()->with('success','User has been added');
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
    public function searchName (Request $request){
        $email = $request->email;
        $queries = DB::table('users')
            ->Where('email','like','%'.$email.'%')
            ->take(20)->get();
        foreach ($queries as $q){
            $results[]=['email' => $q->email];
        }
        return response()->json($results);
    }
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
