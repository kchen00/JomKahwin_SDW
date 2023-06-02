@extends("base")
<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}"> --}}
    <form method="POST" action="/">
        @csrf

        <!-- Ic number -->
        <div class="mt-4">
            <x-input-label for="A_icNum" :value="__('Nombor IC')" />
            <x-text-input id="A_icNum" class="block mt-1 w-full" type="text" name="A_icNum" :value="old('A_icNum')" required autofocus autocomplete="A_icNum" />
            <x-input-error :messages="$errors->get('A_icNum')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="A_email" :value="__('Email')" />
            <x-text-input id="A_email" class="block mt-1 w-full" type="email" name="A_email" :value="old('A_email')" required autocomplete="A_email" />
            <x-input-error :messages="$errors->get('A_email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="A_password" :value="__('Kata Laluan')" />

            <x-text-input id="A_password" class="block mt-1 w-full"
                            type="password"
                            name="A_password"
                            required autocomplete="A_password" />

            <x-input-error :messages="$errors->get('A_password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Ulang Kata Laluan')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    
        <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="A_gender" :value="__('Jantina')" />
            {{-- <x-dropdown/>  --}}
            {{-- <x-text-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')" required autocomplete="gender" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" /> --}}
            <select class="block mt-1 w-full" name="A_gender">
                <option selected hidden disabled value="">SILA PILIH JANTINA ANDA</option>
                <option value="M">LELAKI</option>
                <option salue="F">PEREMPUAN</option>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/login">
                {{ __('Sudah Daftar?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Daftar akaun') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
