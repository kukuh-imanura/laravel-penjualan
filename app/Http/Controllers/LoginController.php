<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        \Log::info($credentials); // Log input credentials

        $user = Login::where('username', $credentials['username'])->first();
        \Log::info($user); // Log user object

        if ($user && $credentials['password'] === $user->password) {
            session(['user' => $user]);
            return redirect()->route('dashboard');
        }

        \Log::info('Invalid credentials'); // Log if credentials invalid
        return back()->withErrors(['username' => 'Invalid credentials']);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}