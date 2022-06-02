<?php

namespace App\Http\Controllers;

use App\Models\GroupInvite;
use App\Models\MeetingInviteUser;
use App\Models\User;
use App\Policies\GroupPolicy;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AuthController extends Controller
{

    public function login(Request $request): RedirectResponse
    {
        // validate credentials
        $credentials = $request->validate([
            'email' => ['required','exists:users,email'],
            'password' => 'required'
        ]);

        // attempt login
        if (Auth::attempt($credentials,$request->get('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        // if login failed, go back with errors
        return redirect()->back()->withErrors([
            'email' => 'unable to authenticate',
        ])->onlyInput(['email','remember']);
    }

    public function logout(request $request): Redirector|Application|RedirectResponse
    {
        // logout
        auth()->logout();

        // invalidate session
        $request->session()->invalidate();

        // regenerate CSRF token
        $request->session()->regenerateToken();

        // redirect to landing page
        return redirect('/');
    }

}
