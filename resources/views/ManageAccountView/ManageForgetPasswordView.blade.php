{{-- interface to get user email to generate a password reset token --}}
@extends("ManageAccountView.ManageAccountViewBaseUser")
@section("ManageAccountView.ManageForgetPasswordView")
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Lupa kata laluan anda? Tiada masalah. Beritahu kami alamat e-mel anda dan kami akan menghantar pautan tetapan semula kata laluan melalui e-mel yang membolehkan anda memilih yang baru.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="/request_reset_password">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="A_email" :value="__('E-mel')" />
            <x-text-input id="A_email" class="block mt-1 w-full" type="email" name="A_email" :value="old('A_email')" required autofocus />
            <x-input-error :messages="$errors->get('A_email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button>
                {{ __('Emel pautan reset kata laluan') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@stop
