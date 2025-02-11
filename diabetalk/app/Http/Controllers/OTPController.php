<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OTPController extends Controller
{
    //
    protected $whatsappService;

    public function __construct(WhatsAppGatewayService $whatsappService)
    {
        $this->whatsappService = $whatsappService;
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
        ]);

        $otp = rand(100000, 999999); // Generate kode OTP
        $message = "Your OTP is: $otp";

        try {
            $response = $this->whatsappService->sendMessage($request->phone, $message);

            if ($response['status'] === 'success') {
                return response()->json(['message' => 'OTP sent successfully.'], 200);
            }

            return response()->json(['message' => 'Failed to send OTP.', 'error' => $response['error']], 500);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error sending OTP.', 'error' => $e->getMessage()], 500);
        }
    }
}
