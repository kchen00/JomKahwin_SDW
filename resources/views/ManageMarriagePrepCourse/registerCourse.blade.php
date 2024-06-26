@extends('ManageMarriagePrepCourse.base')
@section('ManageMarriagePrepCourse.registerCourse')

@php
    $account = Auth::guard('account')->user();
@endphp

<div class='header'>
    <h5>KURSUS PRA PERKAHWINAN>>Daftar Kursus Kahwin</h5>

    <div class="col-5 col-xl-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form action="/marriage_course/register/submit" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No.Kad Pengenalan <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <input type="kad" class="form-control" value={{ $account->A_icNum }}>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Pemohon <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <input type="pemohon" class="form-control" value={{ $account->A_name }}>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat Dalam K/P <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <input type="alamat" class="form-control" value={{ $account->A_houseAddress }}>
                            {{-- <input type="checkbox" class="form-check-input" name="validation-checkbox"> --}}
						    {{-- <span class="form-check-label">Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam K/P</span> --}}
                        </div>
                    </div>

                    {{-- <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Negeri <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10"> 
                            <select name="negeri" id="negeri" class="form-control">
                                <option value="negeri">Negeri</option>
                                <option value="johor">JOHOR</option>
                                <option value="kedah">KEDAH</option>
                                <option value="kelantan">KELANTAN</option>
                                <option value="melaka">MELAKA</option>
                                <option value="negeri sembilan">NEGERI SEMBILAN</option>
                                <option value="pahang">PAHANG</option>
                                <option value="perak">PERAK</option>
                                <option value="perlis">PERLIS</option>
                                <option value="pulau pinang">PULAU PINANG</option>
                                <option value="sabah">SABAH</option>
                                <option value="sarawak">SARAWAK</option>
                                <option value="selangor">SELANGOR</option>
                                <option value="terengganu">TERENGGANU</option>
                                <option value="kl">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                <option value="labuan">WILAYAH PERSEKUTUAN LABUAN</option>
                                <option value="putrajaya">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
                            </select>
                        </div>
                    </div> --}}

                    {{-- <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Daerah <font color="#FF0000"> *</font> :</label>
                        <div class="col-sm-10">
                            <select name="daerah" id="daerah" class="form-control">
                                <option value="daerah">Daerah</option>
                                <option value="johor">JOHOR</option>
                                <option value="kedah">KEDAH</option>
                                <option value="kelantan">KELANTAN</option>
                                <option value="melaka">MELAKA</option>
                                <option value="negeri sembilan">NEGERI SEMBILAN</option>
                                <option value="pahang">PAHANG</option>
                                <option value="perak">PERAK</option>
                                <option value="perlis">PERLIS</option>
                                <option value="pulau pinang">PULAU PINANG</option>
                                <option value="sabah">SABAH</option>
                                <option value="sarawak">SARAWAK</option>
                                <option value="selangor">SELANGOR</option>
                                <option value="terengganu">TERENGGANU</option>
                                <option value="kl">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                <option value="labuan">WILAYAH PERSEKUTUAN LABUAN</option>
                                <option value="putrajaya">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
                              </select>
                        </div>
                    </div> --}}

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Pilih Sektor Pekerjaan <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <select name="pekerjaan" id="pekerjaan" class="form-control">
                                <option value="pekerjaan">Pilih Sektor Pekerjaan</option>
                                <option value="bekerja sendiri">BEKERJA SENDIRI</option>
                                <option value="pesara">PESARA</option>
                                <option value="sektor awam">SEKTOR AWAM</option>
                                <option value="sektor swasta">SEKTOR SWASTA</option>
                                <option value="tidak bekerja">TIDAK BEKERJA</option>
                              </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tahap Pendidikan <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <select name="pendidikan" id="pendidikan" class="form-control" value={{ $account->A_educationLevel}}>
                                <option value="negeri">Pilih Pendidikan Tinggi</option>
                                <option value="phd">PHD</option>
                                <option value="master">MASTER</option>
                                <option value="ijazah">IJAZAH</option>
                                <option value="diploma">DIPLOMA</option>
                                <option value="stpm">STPM</option>
                                <option value="spm">SPM</option>
                                <option value="pt3">PT3 / PMR</option>
                                <option value="upsr">UPSR</option>
                              </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Jantina <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                             <select name="jantina" id="jantina" class="form-control" >
                                @if($account->A_gender == "M")
                                    <option selected value="M">Lelaki</option>
                                    <option value="F">Perempuan</option>
                                @else
                                    <option  value="M">Lelaki</option>
                                    <option selected value="F">Perempuan</option>
                                @endif
                              </select>
                        </div>
                    </div>
            
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. Telefon <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <input type="phone" class="form-control" value={{ $account->A_telephoneNum}}>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Cadangan Tarikh Akad Nikah <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <input type="date"  id="txtTkhNikah" name="txtTkhNikah" class="form-control" required >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Slip Pembayaran <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <input type="file" id="myFile" name="filename" class="form-control"><br>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="text-right">
                                <button type="kembali" class="btn btn-primary">
                                    <a href="/marriage_course/anjuran" style="color: white">Kembali</a>
                                </button>
                                <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>


</div>
@stop


