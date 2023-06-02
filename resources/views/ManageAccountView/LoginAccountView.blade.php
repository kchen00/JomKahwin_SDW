{{-- @extends("base") --}}
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <form method="POST" action="{{ route('login') }}"> --}}
    <form method="POST" action="/">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="no_ic" :value="__('No Kad Pengenalan')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Kata Laluan')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Select role -->
        <div class="mt-4">
            <x-input-label for="account_type" :value="__('Jenis Akaun')" />

            <select class="block mt-1 w-full">
                <option selected disabled hidden value="">SILA PILIH JENIS AKAUN ANDA</option>
                <option value="N">Pengguna Biasa</option>
                <option value="S">Staff</option>
            </select>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/">
                                {{ __('Lupa Kata Laluan?') }}
            </a>

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/register">
                {{ __('Belum Daftar?') }}
            </a>

        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Log Masuk') }}
            </x-primary-button>            
        </div>
    </form>
</x-guest-layout>
