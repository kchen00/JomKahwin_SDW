@extends($base_template)
@section("ManageProfileView.ManageDisplayProfile")
{{-- <x-app-layout> --}}
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
                    {{-- check if current state of this view is showing profile of a user from the search result or not --}}
                    @if($displaying_profile == False)
                        @if ($account->A_accountType == 'S')
                            <div>
                                <button>
                                    <a href="/user_directory">Carian Pengguna</a>
                                </button>
                                <button>
                                    <a href="/register">Daftar Akaun Baru Staff</a>
                                </button>
                            </div>
                        @endif   
                    @endif
                    
                </div>
                <div>
                    {{-- table to display the personal information of user  --}}
                    @if($displaying_profile == True)
                        <p>Maklumat bagi {{ $account->A_name }}</p>  
                    @endif
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
                            @if($account->A_gender == "M")
                                <th>{{ "Lelaki" }}</th>
                            @else
                                <th>{{ "Perempuan" }}</th>
                            @endif
                        </tr>
                        <tr>
                            <th>No telefon</th>
                            <th>{{ $account->A_telephoneNum  }}</th>
                        </tr>
                        <tr>
                            <th>E-mel</th>
                            <th>{{ $account->A_email }}</th>
                        </tr>
                        @if ($account->A_accountType == 'S')
                            <tr>
                                <th>Posisi</th>
                                <th>Staff PAID</th>
                            </tr>
                         @endif
                    </table>
                </div>
                <div>
                    <button>
                        @if($displaying_profile == False)
                            <a href="/update_profile">Kemas kini profil</a>
                        @else
                            <a href="/user_directory">Kembali</a>
                        @endif
                    </button>
                </div>
                {{-- <div>
                    <img src={{ asset('A_profilePhoto/' . $account->A_profilePhoto) }}>
                </div> --}}
            </div>
        </div>
    </div>
{{-- </x-app-layout> --}}
@stop
