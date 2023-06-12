@extends($base_template)
@section("ManageProfileView.ManageDisplayProfile")
<x-app-layout>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 card mt-4">
            {{-- check if current state of this view is showing profile of a user from the search result or not --}}
            @if($displaying_profile == False)
                @if ($account->A_accountType == 'S')
                <ul class="nav-bar">
                    <li class="nav-item d-inline-flex">
                        <button class="nav-link">
                            <a href="/user_directory">Carian Pengguna</a>

                        </button>
                    </li>
                    <li class="nav-item d-inline-flex">
                        <button class="nav-link">
                            <a href="/register">Daftar Akaun Baru Staff</a>

                        </button>
                        
                    </li>
                </ul>
                @endif   
            @endif
                {{-- <div class="img-fluid">
                    <img src={{ asset('A_profilePhoto/' . $account->A_profilePhoto) }} class="img-thumbnail">
                </div> --}}
            <div class="p-4">
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
            <div class="align-self-center">
                <button class="btn-link rounded m-4">
                    @if($displaying_profile == False)
                        <a href="/update_profile" class="p-4">Kemas kini profil</a>
                    @else
                        <a href="/user_directory" class="p-4">Kembali</a>
                    @endif
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
@stop
