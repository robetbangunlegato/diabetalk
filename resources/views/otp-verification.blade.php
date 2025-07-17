<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('verifyOtp') }}">
        @csrf

        <!-- WhatsApp -->
        <div>
            <x-input-label for="whatsapp" :value="__('Nomor WhatsApp')" />
            <x-text-input id="whatsapp" class="block mt-1 w-full" type="number" name="whatsapp" :value="old('whatsapp')" required
                autofocus autocomplete="whatsapp" />
            <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
        </div>

        <!-- OTP -->
        <div class="mt-4">
            <x-input-label for="otp" :value="__('OTP')" />

            <x-text-input id="otp" class="block mt-1 w-full" type="number" name="otp" required
                autocomplete="otp" />

            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>

        <div class="row text-center mt-4">
            <div class="text-green-600">
                Periksa WhatsApp untuk mendapatkan kode OTP.
            </div>
        </div>

        <div class="row text-center mt-4">
            @if (session('error'))
                <div class="text-red-600">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="grid mt-4">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded text-white">Verifikasi</button>
            {{-- <x-primary-button class="ms-3">
                {{ __('Verifikasi') }}
            </x-primary-button> --}}
        </div>
    </form>
</x-guest-layout>
