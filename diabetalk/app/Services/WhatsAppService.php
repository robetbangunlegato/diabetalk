<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class WhatsAppService
{
    protected $userkey;
    protected $passkey;
    protected $url;

    public function __construct()
    {
        $this->userkey = env('WHATSAPP_USERKEY');
        $this->passkey = env('WHATSAPP_PASSKEY');
        $this->url = 'https://console.zenziva.net/wareguler/api/sendWA/';
    }

    public function sendOtp($phone, $message)
    {
        $userkey = 'b31a046638df';
        $passkey = '0bdb4c0e1eedcc58bd418bd1';
        $url = 'https://console.zenziva.net/wareguler/api/sendWA/';

        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, [
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $phone,
            'message' => $message,
        ]);

        $result = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $result;
    }
}
