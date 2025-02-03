<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\ResetPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::user()->is_role == '1') {
                return redirect()->intended('admin/dashboard');
            } else {
                return redirect()->back()->with('error', 'Please Enter the Correct Credentials');
            }
        } else {
            return redirect()->back()->with('error', 'Please Enter the Correct Credentials');
        }
    }

    public function forgot_post(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();

        if ($user) {
            $user->remember_token = Str::random(50);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            // Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', 'Password reset email has been sent. Please check your inbox, spam, or junk folder.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Email not found in the system.');
        }
    }

    public function forgot(Request $request)
    {
        return view('auth.forgot');
    }

    public function getReset($token)
    {
        if (Auth::check()) {
            return redirect('admin/dashboard');
        }

        $user = User::where('remember_token', '=', $token)->first();

        if (!$user) {
            abort(403);
        }

        return view('auth.reset', ['token' => $token]);
    }

    public function reset_post($token, ResetPassword $request)
    {
        $user = User::where('remember_token', '=', $token)->first();

        if (!$user) {
            abort(403);
        }

        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect('/')->with('success', 'Password has been reset successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(url('/'));
    }
}