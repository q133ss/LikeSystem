<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginController\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $user = User::where('email', $request->email);
        if($user->exists()){
            if(Hash::check($request->password,$user->pluck('password')->first())){

                if(isset($request->remember)){
                    Auth::login($user->first(), true);
                }else{
                    Auth::login($user->first(), false);
                }

                return to_route('index');
            }else{
                return back()->withErrors('Неверный пароль');
            }
        }else{
            return back()->withErrors('Пользователь не найден');
        }
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        Auth::login($user);
        return to_route('index');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
