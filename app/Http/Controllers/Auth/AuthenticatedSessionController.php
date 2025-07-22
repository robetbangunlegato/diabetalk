<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        // Periksa apakah user sudah verifikasi OTP
        $user = Auth::user();
        if (!$user->is_verified) {
            Auth::logout();
            return redirect()->route('otp-verification')->with('error', 'Anda harus memverifikasi OTP terlebih dahulu.');
        }


        if (!$user->has_seen_intro) {
            return redirect()->route('intro_page_1');
        }

        $request->session()->regenerate();
        return redirect()->intended(route('catatankesehatan.index', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
