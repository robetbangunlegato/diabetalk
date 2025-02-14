<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use App\Services\WhatsAppService;

class RegisteredUserController extends Controller
{
    protected $WhatsAppService;
     
    public function __construct(WhatsAppService $WhatsAppService)
    {
        $this->WhatsAppService = $WhatsAppService;
    }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{

    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'whatsapp' => ['required', 'numeric', 'digits_between:11,13', 'unique:'.User::class],
    ]);
    
    $otp = rand(100000, 999999);
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'whatsapp' => $request->whatsapp,
        'otp' => $otp,
        'password' => Hash::make($request->password),
    ]);
    event(new Registered($user));

    // Kirim OTP ke WhatsApp
    // $message = "Halo {$user->name},ini pesan dari Diabetalk kode OTP kamu adalah {$user->otp}. Masukan kode tersebut ke halaman aplikasi Diabetalk tadi ya.";
    // $this->WhatsAppService->sendOtp($user->whatsapp, $message);

    return redirect()->route('otp-verification');
}

public function verifyOtp(Request $request)
{
    $validator = Validator::make($request->all(), [
        'whatsapp' => ['required', 'numeric', 'digits_between:11,13'],
        'otp' => 'required|numeric',
    ]);

    // if ($validator->fails()) {
    //     return response()->json(['errors' => $validator->errors()], 422);
    // }

    $user = User::where('whatsapp', $request->whatsapp)->first();

    if (!$user || $user->otp != $request->otp) {
        return redirect()->route('otp-verification')->with('error', 'Kesalahan Nomor whatsApp/OTP, Periksa kembali.');
        // return response()->json(['message' => 'Invalid OTP.'], 400);
    }

    // Update status verifikasi
    $user->update(['is_verified' => true, 'otp' => null]);

    // return response()->json(['message' => 'OTP verified. Welcome to the dashboard!']);
    return redirect()->route('login')->with('success', 'OTP berhasil di verifikasi, silahkan login.');
}

}
