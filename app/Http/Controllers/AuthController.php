<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function login(Request $request) {

    }

    public function register(Request $request) {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'passwordConfirmation' => 'required|string|same:password',
        ]);
        dd($validated);
    }

    public function logout(Request $request) {

    }

    public function forgotPassword(Request $request) {

    }

    public function resendVerificationEmail(Request $request) {

    }

    public function changePassword(Request $request) {

    }
}
