@extends("ManageProfileView.ManageProfileViewBaseAdmin")
@section("ManageProfileView.ManageSearchProfileView")
<x-app-layout>
    <div class="display-1 p-4 card block w-full rounded">
        <p>Carian Pengguna</p>
    </div>
    <div class="block">
            <form action="/search_user" method="post" class="">
                @csrf
                <input type="text" name="A_icNum">
                <select name="A_accountType">
                    <option disabled hidden selected>SILA PILIH JENIS PENGGUNA</option>
                    <option value="P">PENGGUNA BIASA</option>
                    <option value="S">STAFF JAIP</option>
                </select>
                <x-primary-button class="px-4 rounded" style="background-color: #635B5B">
                    {{ __('Cari') }}
                </x-primary-button>
            </form>
            <div>
                <p>Senarai pengguna</p>
                @if(count($user_list)>0)
                    <table style="width: 100%; border: 1px black">
                        <tr>
                            <td>no.</td>
                            <td>Nama</td>
                            <td>Nombor kad pengelanan</td>
                            <td>Nombor telefon</td>
                            <td></td>
                        </tr>  
                        {{-- listing out all the user --}}
                        @for($i=0; $i<count($user_list); $i++)
                            @if($user_list[$i]->A_name)
                                <tr>
                                    <td>{{ $i+1 }}.</td>
                                    <td>{{ $user_list[$i]->A_name }}</td>
                                    <td>{{ $user_list[$i]->A_icNum }}</td>
                                    <td>{{ $user_list[$i]->A_telephoneNum }}</td>
                                    <td><button><a href="/user/{{ $user_list[$i]->A_accountID }}">Tunjuk profil</a></button></td>       
                                </tr>
                            @endif    
                        @endfor
                        
                    </table>
                @else
                    <p>Tiada hasilan</p>
                @endif
            </div>
    </div>
</x-app-layout>
@stop