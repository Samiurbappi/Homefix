<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function loginView()
    {
        return view('user.loginview');
    }
    public function login()
    {
        // dd(request()->all());
        if(Auth::attempt(['email' => request()->email, 'password' => request()->password]))
    {
        $user = Auth::user();
        Auth::login($user);
        return redirect('/');
    }
    else
    {
        return redirect()->back();
    }
    }
    public function regView()
    {
        return view('user.regView');
    }
    public function register()
    {
        User::create([
            'name'=>request()->name,
            'email'=>request()->email,
            'password'=>bcrypt(request()->password)
        ]);
        return redirect('/');
    }
    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect('/');
    }
}
