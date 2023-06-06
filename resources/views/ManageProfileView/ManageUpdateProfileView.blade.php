{{-- @extends('base')
@section("ManageProfielView.ManageUpdateProfileView") --}}
<x-app-layout>
    <div class="row">
        <form method="POST" action="/update_profile_store" enctype="multipart/form-data">
            @csrf
            {{-- field to update information --}}
            <div name="basic_information" >
                <h2>Maklumat Asas</h2>
                <div>
                    <x-input-label for="A_name" :value="__('Nama')" />
                    <x-text-input id="A_name" class="block mt-1 w-full" type="text" name="A_name" :value="old('A_name')" required autofocus autocomplete="A_name" />
                    <x-input-error :messages="$errors->get('A_name')" class="mt-2" />
                </div> 

                <div>
                    <x-input-label for="A_ethnicity" :value="__('Kaum')" />
                    <select name="A_ethnicity" class="block mt-1 w-full">
                        <option disabled selected hidden>SILA PILIH KAUM ANDA</option>
                        <option value="Melayu">Melayu</option>
                        <option value="Cina">Cina</option>
                        <option value="India">India</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div> 
                <div>
                    <x-input-label for="A_nationality" :value="__('Warganegara')" />
                    <select name="A_nationality" class="block mt-1 w-full">
                        <option disabled selected hidden>SILA PILIH KEWARGANEGARAAN ANDA</option>
                        <option value="yes">Warganegara Malaysia</option>
                        <option value="no">Bukan warganegara Malaysia</option>
                    </select>
                </div> 
            </div>
            <div name="contact_information">
                <div>
                    <x-input-label for="A_houseAddress" :value="__('Alamat rumah')" />
                    <x-text-input id="A_houseAddress" class="block mt-1 w-full" type="text" name="A_houseAddress" :value="old('A_houseAddress')" required autofocus autocomplete="A_houseAddress" />
                    <x-input-error :messages="$errors->get('A_houseAddress')" class="mt-2" />
                </div> 
                <div>
                    <x-input-label for="A_telephoneNum" :value="__('Nombor telefon')" />
                    <x-text-input id="A_telephoneNum" class="block mt-1 w-full" type="text" name="A_telephoneNum" :value="old('A_telephoneNum')" required autofocus autocomplete="A_telephoneNum" />
                    <x-input-error :messages="$errors->get('A_telephoneNum')" class="mt-2" />
                </div> 
                <div>
                    <x-input-label for="A_landlineNumber" :value="__('Nombor telefon rumah')" />
                    <x-text-input id="A_landlineNumber" class="block mt-1 w-full" type="text" name="A_landlineNumber" :value="old('A_landlineNumber')" required autofocus autocomplete="A_landlineNumber" />
                    <x-input-error :messages="$errors->get('A_landlineNumber')" class="mt-2" />
                </div> 
            </div>
            <div name="job information">
                <div>
                    <x-input-label for="A_jobSector" :value="__('Sektor pekerjaan')" />
                    <x-text-input id="A_jobSector" class="block mt-1 w-full" type="text" name="A_jobSector" :value="old('A_jobSector')" required autofocus autocomplete="A_jobSector" />
                    <x-input-error :messages="$errors->get('A_jobSector')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="A_jobAddress" :value="__('Alamat tempat kerja')" />
                    <x-text-input id="A_jobAddress" class="block mt-1 w-full" type="text" name="A_jobAddress" :value="old('A_jobAddress')" required autofocus autocomplete="A_jobAddress" />
                    <x-input-error :messages="$errors->get('A_jobAddress')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="A_officeNo" :value="__('Nombor telefon pejabat')" />
                    <x-text-input id="A_officeNo" class="block mt-1 w-full" type="text" name="A_officeNo" :value="old('A_officeNo')" required autofocus autocomplete="A_officeNo" />
                    <x-input-error :messages="$errors->get('A_officeNo')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="A_income" :value="__('Pendapatan')" />
                    <x-text-input id="A_income" class="block mt-1 w-full" type="text" name="A_income" :value="old('A_income')" required autofocus autocomplete="A_income" />
                    <x-input-error :messages="$errors->get('A_income')" class="mt-2" />
                </div>
            </div>
            <div name="other_information">
                <div>
                    <x-input-label for="A_marriageStatus" :value="__('Status perkahwinan')" />
                    <select name="A_marriageStatus" class="block mt-1 w-full">
                        <option disabled selected hidden>SILA PILIH STATUS ANDA</option>
                        <option value="single">Belum Kahwin</option>
                        <option value="married">Berkahwin</option>
                        <option value="divorced">Bercerai</option>
                        <option value="polygamy">Kahwin poligami</option>
                    </select>
                </div> 
                <div>
                    <x-input-label for="A_educationLevel" :value="__('Taraf pendidikan')" />
                    <x-text-input id="A_educationLevel" class="block mt-1 w-full" type="text" name="A_educationLevel" :value="old('A_educationLevel')" required autofocus autocomplete="A_educationLevel" />
                    <x-input-error :messages="$errors->get('A_educationLevel')" class="mt-2" />
                </div> 
            </div>
            <div>
                {{-- upload photo here --}}
                <x-input-label for="A_profilePhoto" :value="__('Muat Naik Gambar Anda')" />
                <x-text-input id="A_profilePhoto" class="block mt-1 w-full" type="file" name="A_profilePhoto" :value="old('A_profilePhoto')" required autofocus autocomplete="A_profilePhoto" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    {{ __('Kemas kini') }}
                </x-primary-button>            
            </div>
        </form>
    </div>
</x-app-layout>

{{-- @stop --}}