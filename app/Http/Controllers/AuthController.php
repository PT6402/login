<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    // public function index()
    // {
    //     Session()->put('success', "abc");
    //     return redirect('/');
    // }
    public function login(Request $request)

    {



        $validator = Validator::make($request->all(), [

            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()]);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['checkEmail' => " Email doesn't exist"]);
        }

        if (!($user && Hash::check($request->password, $user->password))) {
            // Mật khẩu hợp lệ
            return response()->json(['checkPass' => "Password not match"]);
        }




        // if (Auth::attempt($request->only('email,password'))) {
        // }
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()]);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'dateOfBirth' => $request->date,
            'role' => $request->role,

        ]);
        if (Auth::attempt($request->only('email,password'))) {
            dd($request->all());
        }
    }
}
