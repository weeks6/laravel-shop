<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {

        $this->validate($request, [
            'email' => ['required'],
            'login' => ['required'],
            'name' => ['required'],
            'surname' => ['required'],
            'patronymic' => ['required'],
            'password' => ['required'],
        ]);

        // dd($request);

        User::create([
            'email' => $request->email,
            'login' => $request->login,
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'password' => Hash::make($request->password),
            'role_id' => Role::default_role()
        ]);

        return redirect()->route('register');
    }

    public function login(Request $request)
    {
        Auth::attempt(['login' => $request->login, 'password' => $request->password]);
        return redirect()->route('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
