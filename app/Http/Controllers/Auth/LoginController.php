<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        Validator::make($input, [
            'username' => 'required',
            'password' => 'required',
        ], [
            'required' => 'The :attribute field is required.',
        ])->validate();

        // Check input email or username
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $user = User::where($fieldType, $input['username'])->first();

        if (!$user) {
            // Tidak ada user dengan email atau username tersebut
            return redirect()->back()->withErrors('The account with this email/username does not exist.');
        } else {
            // Jika user ada, coba autentikasi
            if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
                if (!$user->perusahaan_id) {
                    return redirect()->back();
                }else{
                    return redirect()->route('backend.main-menu');
                }
            } else {
                // Password salah
                return redirect()->back()->withErrors('The password you entered is incorrect.');
            }
        }
    }
}
