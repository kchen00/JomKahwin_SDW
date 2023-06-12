@extends("ManageAccountView.ManageAccountViewBaseAdmin")
@section("ManageAccountView.RegisterStaffAccountView")
<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}"> --}}
    <form method="POST" action="/register_new_staff">
        @csrf
        <div class="text-center display-6">
            <p>DAFTAR AKAUN STAFF BARU</p>
            <p>Sila masukkan maklumat seperti berikut</p>  
        </div>
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
            <x-input-label for="A_password_confirmation" :value="__('Ulang Kata Laluan')" />

            <x-text-input id="A_password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="A_password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    
        <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="A_gender" :value="__('Jantina')" />
            {{-- <x-dropdown/>  --}}
            {{-- <x-text-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')" required autocomplete="gender" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" /> --}}
            <select class="block mt-1 w-full" name="A_gender">
                <option selected hidden disabled value="">SILA PILIH JANTINA STAFF BARU</option>
                <option value="M">LELAKI</option>
                <option value="F">PEREMPUAN</option>
            </select>
        </div>

        <div class="flex items-center justify-between mt-4">
            <!-- Position -->
            <div class="mt-4">
                <x-input-label for="ST_staffPosition" :value="__('Posisi staff baru')" />
                {{-- <x-dropdown/>  --}}
                {{-- <x-text-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')" required autocomplete="gender" />
                <x-input-error :messages="$errors->get('gender')" class="mt-2" /> --}}
                <select class="block mt-1 w-full" name="ST_staffPosition">
                    <option selected hidden disabled value="">SILA PILIH POSISI STAFF BAHARU</option>
                    <option value="JS">STAFF JAIP</option>
                    <option value="SA">PENASIHAT</option>
                </select>
            </div>

            <!-- Access level -->
            <div class="mt-4">
                <x-input-label for="ST_staffAccessLevel" :value="__('Level Akses staff baru')" />
                {{-- <x-dropdown/>  --}}
                {{-- <x-text-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')" required autocomplete="gender" />
                <x-input-error :messages="$errors->get('gender')" class="mt-2" /> --}}
                <select class="block mt-1 w-full" name="ST_staffAccessLevel">
                    <option selected hidden disabled value="">SILA PILIH LEVEL AKSES STAFF BAHARU</option>
                    <option value="1">level 1</option>
                    <option value="2">level 2</option>
                </select>
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ml-4">
                {{ __('Daftar akaun') }}
            </x-primary-button>
        </div>

        {{-- <div class="flex items-center justify-center mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/login">
                {{ __('Sudah Daftar?') }}
            </a>
        </div> --}}
    </form>
</x-guest-layout>
@stop