<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller{
    public function mostrarLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->comprobarLogin($request);


        if (Auth::attempt(['nick' => $request->nick, 'password' => $request->password])) {
            return redirect()->intended('parejas');
        }


        throw ValidationException::withMessages([
            'nick' => [trans('auth.failed')],
        ]);
    }

    protected function comprobarLogin(Request $request){
        $request->validate([
            'nick' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}