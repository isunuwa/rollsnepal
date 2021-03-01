<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PostRegisterRequest;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create($data);
    }

    /**
     * function to handle get request and display view of signup page
     * @return View [description]
     */
    public function getRegister() {
        return view('frontend.general.signup')->with('posts', Post::all())->with('users', User::all())->with('categories', Category::all())->with('locations', Location::all());
    }

    /**
     * function to handle post register request and insert into the database
     * @param  PostRegisterRequest $request [description]
     * @return [type]                       [description]
     */
    public function postRegister(PostRegisterRequest $request) {
        //variable to store first name of the user
        $fname = $request->input('first-name');
        //variable to store middle name of the user
        $mname = $request->input('middle-name');
        //variable to store the email of the user
        $email = $request->input('email');
        //variable to store last name of the user
        $lname = $request->input('last-name');
        //variable to store username of the user
        $user = $request->input('username');
        //variable to store password of the user
        $pass = $request->input('password');
        //array containing user fields to be inserted in user table
        // dd($request->all());
        $data_user = [
            'username' => $user,
            'email' => $email,
            'first_name' => $fname,
            'middle_name' => $mname,
            'last_name' => $lname,
            'password' => bcrypt($pass),
        ];
            //insert into users table
            $insert_user = $this->create($data_user);
            $request->session()->flash('Registered', 'New User successfully registered');
            return redirect()->route('login');
    }
}
