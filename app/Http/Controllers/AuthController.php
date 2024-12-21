<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    //
    public function showRegister()
    {
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'username' => 'required|string|max:255|unique:users',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6|confirmed', // 'confirmed' kiểm tra password_confirmation
        //     'confirm_password' => 'required|string|min:6',
        // ]);
        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password), // Hash mật khẩu
            'email' => $request->email,
        ]);

        return redirect()->intended('welcome');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials))
        {
            return redirect()->intended('welcome');
        }
        return back()->withErrors(['Thông tin đăng nhập không chính xác']);
    }
    
}
