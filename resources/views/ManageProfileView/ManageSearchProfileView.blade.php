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
                    {{ __("Carian pengguna") }}
                </div>
            </div>
            <div>
                <form action="/search_user" method="post">
                    @csrf
                    <input type="text" name="A_icNum" >
                    <select name="A_accountType">
                        <option disabled hidden selected>SILA PILIH JENIS PENGGUNA</option>
                        <option value="P">PENGGUNA BIASA</option>
                        <option value="S">STAFF JAIP</option>
                    </select>
                    <x-primary-button class="ml-4">
                        {{ __('Cari') }}
                    </x-primary-button>
                </form>
            </div>
            <div>
                @if(count($user_list)>0)
                    <table>
                        <tr>
                            <td>no.</td>
                            <td>Nama</td>
                            <td>Nombor kad pengelanan</td>
                            <td>Nombor telefon</td>
                            <td></td>
                        </tr>  
                        {{-- listing out all the user --}}
                        @for($i=0; $i<count($user_list); $i++)
                        <tr>
                            <td>{{ $i+1 }}.</td>
                            <td>{{ $user_list[$i]->A_name }}</td>
                            <td>{{ $user_list[$i]->A_icNum }}</td>
                            <td>{{ $user_list[$i]->A_telephoneNum }}</td>
                            <td><button><a href="/user/{{ $user_list[$i]->A_accountID }}">Tunjuk profil</a></button></td>       
                        </tr>    
                        @endfor
                        
                    </table>
                @else
                    <p>Tiada hasilan</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
