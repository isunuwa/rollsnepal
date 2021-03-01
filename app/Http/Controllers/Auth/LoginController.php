<?php

namespace App\Http\Controllers\Auth;

use DB;
use \Session;
use \Auth;
use App\Models\Post;
use App\Models\Location;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostLoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user/home';

    /**
     * where to redirect users after logout or unsuccessful authentication
     *
     * @var string
     */
    protected $loginPath = 'login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('guest')->except('getLogout');
    }

    /**
     * get the login page
     *
     * @return view
     */
    public function getLogin() {
        return view('frontend.general.login')->with('posts', Post::all())->with('users', User::all())->with('categories', Category::all())->with('locations', Location::all());
    }

    /**
     * [postLogin description]
     * @param  PostLoginRequest $request [description]
     * @return [type]                    [description]
     */
    public function postLogin(PostLoginRequest $request) {
        //value of email field
        $usernameoremail = $request->input('input-email');
        //value of password field
        $pass = $request->input('input-password');
        //boolean value of remember me
        $remember = $request->input('remember-me') ? true : false;

        if( (Auth::attempt(['username' => $usernameoremail, 'password' =>$pass], $remember)) ||
            (Auth::attempt(['email' => $usernameoremail, 'password' => $pass], $remember)) ) {
                $this->loggedIn();
        }
        $request->session()->flash('loginError', 'Invalid credentials !');
        return redirect()->route('login')->withInput($request->except('input-password'));
    }

    /**
     * get the user info, store it in a session and redirect to the home page
     * @return View [description]
     */
    public function loggedIn() {
        $user_info = $this->loggedInInfo();
        Session::put('user_info', $user_info);
        // dd($user_info);
        return redirect()->intended('user/home');
    }

    /**
     * get the user login info
     * @return Array [array of user info]
     */
    public function loggedInInfo() {
        $id = Auth::id();
        $user_info_detail[] = DB::table('users')
                                ->select('*')
                                ->where('id', $id)
                                ->first();
        if(empty($user_info_detail)) {
            Session::flash('loginError', 'User Not Found!');
            return redirect()->route('login');
        }
        return $user_info_detail;
    }

     /**
     * [getLogout description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getLogout(Request $request) {
        $user = Auth::user();
        if($user):
            Auth::logout();
            $request->session()->flash('loggedOut', 'You have sucessfully logged out.');
            $request->session()->forget('user_info');
        endif;

        return redirect()->route('login');
    }
}
