<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AuthRequest;

use Auth;
use Validator;

use App\User;

class AuthController extends Controller
{
	public function showLogin() 
	{
		return view('auth.login');
	}

    // Authenticate the user that is logging in.
    public function authenticate(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required|max:35',
            'password' => 'required|max:255'
        ]);

        $credentials = $request->only('name', 'password');

        // Attempt to authenticate the user that is trying to login.
    	if ( Auth::attempt($credentials) ) {

            // Now we know that the user credentials are indeed correct
            // we can begin the process of checking active and locked 
            // accounts.
            $user = User::where('name', $request->input('name'))->first();

            // Inactive account.
            if ( !$user->active ) {
                $errors = new MessageBag(['login' => ['You need to activate your account before logging in.']]);

                return redirect()
                    ->back()
                    ->withErrors($errors);
            }

            // The user account has been locked.
            if ( $user->locked ) {
                $errors = new MessageBag(['login' => ['Your account has been locked.']]);

                return redirect()
                    ->back()
                    ->withErrors($errors);
            }

    		return redirect()->intended('/admin');
    	} 

        // The user has failed to authenticate.
        // Let them no there credentials were incorrect.
        $errors = new MessageBag(['login' => ['Email and/or password invalid.']]);

        return redirect()
            ->back()
            ->withErrors($errors);  
    }
}
