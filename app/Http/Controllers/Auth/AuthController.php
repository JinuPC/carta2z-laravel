<?php 

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Validator, Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

    protected $username = 'username';
    protected $loginPath = 'login';
    protected $redirectPath = '/admin';

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
        $this->middleware('guest', ['except' => 'getLogout']);
	}

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255|min:2',
            'lastname' => 'string|max:255',
            'username' => 'required|string|max:64|min:4|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'tin_no' => 'required|unique:users|digits:9',
            'phone_no' => 'required|unique:users|digits:10',
            'password' => 'required|confirmed|min:8|max:64|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X]).*$/',
            'role' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        

        return User::create([
            'username' => $data['username'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'tin_no' => $data['tin_no'],
            'phone_no' => $data['phone_no'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'], 
            'activated' => 0
            
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $this->create($request->all());
        $request->session()->flash('alert-success', 'Your account has been successfully created! Please wait for the approval');

        return redirect('/');
    }

    /*
    * Override the postLogin method for validating the user role 
    * This function also enable the user to login either username or email.
    */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'userid' => 'required', 'password' => 'required',
        ]);

        if ($this->auth->validate([
            'email' => $request->userid, 
            'password' => $request->password, 
            'activated' => 0
            ])) 
        {

            return redirect($this->loginPath())
                ->withInput($request->only('userid', 'remember'))
                ->withErrors('Your account verification is Onprocess. Please try later!');
        }
        elseif ($this->auth->validate([
            'username' => $request->userid, 
            'password' => $request->password, 
            'activated' => 0
            ])) 
        {

            return redirect($this->loginPath())
                ->withInput($request->only('userid', 'remember'))
                ->withErrors('Your account verification is Onprocess. Please try later!');
        }

        $credentialWithEmail  = array(
            'email' => $request->userid, 
            'password' => $request->password
            );
        $credentialWithUsername = array(
            'username' => $request->userid, 
            'password' => $request->password
            );

        if ($this->auth->attempt($credentialWithEmail, $request->has('remember')))
        {

            return redirect()->intended($this->redirectPath());
        }
        elseif($this->auth->attempt($credentialWithUsername, $request->has('remember')))
        {

            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->loginPath())
            ->withInput($request->only('userid', 'remember'))
            ->withErrors([
                'userid' => 'There was an error with your credentials. Please try again.',
            ]);
    }

    /**
     * Logs out a user.
     *
     * @param  array  $data
     * @return User
     */
    protected function logout()
    {
        Auth::logout();
        return 1;
    }
}
