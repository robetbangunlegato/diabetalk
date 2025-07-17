<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class WhatsAppService
{
    public function sendOtp($phone, $message)
    {
         $curl = curl_init();
        $token = "kArBW2gThHWezPysk2FrakMDoxjtP9kTc9AutzREQGCRY6t1KzioPaO";
        $secret_key = "4oREWmgz";
        $random = true;
        $payload = [
            "data" => [
                [
                    'phone' => $phone,
                    'message' => $message,
                ]
            ]
        ];
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token.$secret_key",
                "Content-Type: application/json"
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload) );
        curl_setopt($curl, CURLOPT_URL,  "https://bdg.wablas.com/api/v2/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($curl);
        curl_close($curl);
        echo "<pre>";
    }
}
