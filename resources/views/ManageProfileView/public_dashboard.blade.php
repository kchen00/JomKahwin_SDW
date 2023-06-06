<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Selamat datang ke sistem JomKahwin!") }}
                </div>
                <div>
                    {{-- table to display the personal information of user  --}}
                    <table>
                        <tr>
                            <th>No Kad Pengenalan</th>
                            <th>{{ $account->A_icNum }}</th>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th>{{ $account->A_name }}</th>
                        </tr>
                        <tr>
                            <th>Jantina</th>
                            <th>{{ $account->A_gender }}</th>
                        </tr>
                        <tr>
                            <th>No telefon</th>
                            <th>{{ $account->A_telephoneNum  }}</th>
                        </tr>
                        <tr>
                            <th>E-mel</th>
                            <th>{{ $account->A_email }}</th>
                        </tr>
                    </table>
                </div>
                <div>
                    <button>
                        <a href="/update_profile">Kemas kini profil</a>
                    </button>
                </div>
                {{-- <div>
                    <img src={{ asset('A_profilePhoto/' . $account->A_profilePhoto) }}>
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
