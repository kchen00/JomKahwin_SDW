<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- IC number -->
        <div>
            <x-input-label for="name" :value="__('Nombor IC')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('ic_num')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('ic_num')" class="mt-2" />
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

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('E-mel')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('JANTINA')" />
            <select class="block mt-1 w-full">
                <option value="" selected hidden disabled>SILA PILIH JANTINA ANDA</option>
                <option value="M">LELAKI</option>
                <option value="F">PEREMPUAN</option>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Sudah Daftar?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Daftar Akaun') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
