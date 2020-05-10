<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Mail;
use Auth;

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
   protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout', 'logoutMobile');
    }
   
    public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'national_number' => 'required'
        ]);
        $user = User::where('national_number', $input['national_number'])->first();
        if($user && auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            return redirect()->route('student.completeform');
        }else{
            return redirect()->route('student.formLogin')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }

    public function loginMobile(Request $request)
    {   
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'user' => $user
        ]);    
    }

  
    public function formLogin(Request $request)
    {
        return view('student.formLogin');
    }

    public function Reset(Request $request)
    {
        $data = $request->all();
        $user =User::where('email', $data['email'])->first();
        if($user) {
            $to_name = $user->name;
            $to_email = $user->email;
            $data = array('name'=> $user['name'], 'email' => $user['email'], 'password' => $user['admin_password']);
            Mail::send('emails.reset', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('Forget Password');
            });
            return redirect()->route('home');
        }
    }

    public function logoutMobile(Request $request)
    {
        auth()->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
    }
}
