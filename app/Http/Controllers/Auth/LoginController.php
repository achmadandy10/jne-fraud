<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            // var_dump($user);
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        } if ($user->role == 'ADMIN') {
            // var_dump($user);
                return redirect()->route('admin-dashboard');
            }elseif($user->role == 'USER'){
                // var_dump($user);
                return redirect()->route('home');
            }

        // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        // {

        //     if (auth()->user()->role == 'ADMIN') {
        //         return redirect()->route('admin-dashboard');
        //     }elseif(auth()->user()->role == 'USER'){
        //         return redirect()->route('home');
        //     }
        // }else{
        //     return redirect()->route('login')
        //         ->with('error','Email-Address And Password Are Wrong.');
        // }

    }

    public function logout(Request $request) {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
