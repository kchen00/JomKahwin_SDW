{{-- interface to allow user to reest password --}}
@extends("ManageAccountView.ManageAccountViewBaseUser")
@section("ManageAccountView.ManageResetPasswordView")
<x-guest-layout>
    <form method="POST" action="/password_reset">
        @csrf 
        <p class="display-4 fw-bold align-self-center p-auto">Reset kata laluan</p>

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value={{ $token }}>

        <div class="mt-4">
            <!-- Email Address -->
            <div>
                <x-input-label for="A_email" :value="__('E-mel')" />
                <x-text-input id="A_email" class="block mt-1 w-full" type="email" name="A_email" :value="old('A_email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="A_password" :value="__('Kata laluan baru')" />
                <x-text-input id="A_password" class="block mt-1 w-full" type="password" name="A_password" required autocomplete="A_password" />
                <x-input-error :messages="$errors->get('A_password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="A_password_confirmation" :value="__('Ulang Kata Laluan Baru')" />

                <x-text-input id="A_password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="A_password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button>
                {{ __('Reset Kata Laluan') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@stop