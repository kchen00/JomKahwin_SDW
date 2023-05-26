<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <p>DAFTAR AKAUN BAHARU</p><br>
        <p>Sila masukkan maklumat seperti berikut</p>
        <!-- Ic number -->
        <div class="mt-4">
            <x-input-label for="ic_number" :value="__('Nombor IC')" />
            <x-text-input id="ic_number" class="block mt-1 w-full" type="text" name="ic_number" :value="old('ic_number')" required autofocus autocomplete="ic_number" />
            <x-input-error :messages="$errors->get('ic_number')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="ic_number" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Kata Laluan')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Ulang Kata Laluan')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        
        <!-- choose gender -->
        <div class="mt-4">
            {{-- <x-input-label for="ic_number" :value="__('Sila pilih jantina anda')" /> --}}
            <select selected="default" class="block mt-1 w-full">
                <option selected disabled hidden>Silih Pilih Jantina Anda</option>
                <option value="M">Lelaki</option>
                <option value="F">Perempuan</option>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Sudah daftar?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Daftar akaun') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
