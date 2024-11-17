<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginPage(Request $request)
    {
        return view('auth.login');
    }

    public function registerPage(Request $request)
    {
        return view('auth.register');
    }

    public function forgotPasswordPage(Request $request)
    {

    }

    public function changePasswordPage(Request $request)
    {

    }

    public function login(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
            'rememberMe' => '',
        ]);


        if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']],
            array_key_exists('rememberMe', $validated))) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return redirect()->back()->withErrors('Invalid Username/Password');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'passwordConfirmation' => 'required|string|same:password',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('auth.login.page');
    }

    public function sendEmail(string $receiver)
    {
        defer(function () use ($request) {
            info('send email verification');
            Mail::to('budiyono.dev@gmail.com')
                ->send(new EmailVerification());
        });
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login.page');
    }

    public function forgotPassword(Request $request)
    {

    }

    public function resendVerificationEmail(Request $request)
    {

    }

    public function changePassword(Request $request)
    {

    }
}
