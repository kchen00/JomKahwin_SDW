<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="/request_reset_password">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="A_email" :value="__('Email')" />
            <x-text-input id="A_email" class="block mt-1 w-full" type="email" name="A_email" :value="old('A_email')" required autofocus />
            <x-input-error :messages="$errors->get('A_email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
