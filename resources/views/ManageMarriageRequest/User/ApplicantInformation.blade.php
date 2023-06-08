@extends('ManageMarriageRequest.User.base')
@section('ManageMarriageRequest.User.ApplicantInformation')


<div class='header'>
    <table>
        <td width="100%" class="font14boldputih" bgcolor="#2f80ed"><b>&nbsp; PERMOHONAN BERKAHWIN >> MAKLUMAT PEMOHON</b>
        </td>
    </table>
    <br>

<div class="col-6 col-lg-12">
    <div class="tab">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#tab-1" data-bs-toggle="tab" role="tab">MAKLUMAT PEMOHON</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab-2" data-bs-toggle="tab" role="tab">MAKLUMAT PASANGAN</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab-3" data-bs-toggle="tab" role="tab">MAKLUMAT PERKAHWINAN</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab-1" role="tabpanel">
                <h4 class="tab-title">Maklumat Pemohon</h4>
                <form>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. KP : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Pasangan : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tarikh Lahir : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Umur : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Jantina : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Bangsa : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="bangsa" name="bangsa" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="01">MELAYU</option>
                                <option value="02">CINA</option>
                                <option value="03">INDIA</option>
                                <option value="04">BANGLADESHI</option>
                                <option value="05">PAKISTANI</option>
                                <option value="06">SRI LANKA</option>
                                <option value="07">INDONESIAN</option>
                                <option value="08">BUMIPUTERA SABAH</option>
                                <option value="10">BUMIPUTRA SARAWAK</option>
                                <option value="12">ORANG ASLI (SEMENANJUNG)</option>
                                <option value="13">LAIN-LAIN ASIA</option>
                                <option value="14">EUROPEAN</option>
                                <option value="15">ARAB</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Warganegara : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="WARGANEGARA" name="Tahun" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="01">WARGANEGARA</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat Dalam K/P : </label>
                        <div class="col-sm-9">
                            <input type="alamat" class="form-control">
                            <input type="checkbox" class="form-check-input" name="validation-checkbox">
                            <span class="form-check-label">Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam
                                K/P</span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No Telefon (Bimbit) : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No Telefon (Rumah) : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Taraf Pendidikan : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="taraf" name="taraf" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="1">PHD</option>
                                <option value="2">MASTER</option>
                                <option value="3">IJAZAH</option>
                                <option value="4">DIPLOMA</option>
                                <option value="5">STPM / HSC / SIJIL</option>
                                <option value="6">SPM / MCE</option>
                                <option value="7">PT3 / PMR / SRP / LC</option>
                                <option value="8">UPSR</option>
                                <option value="9">TIADA PENDIDIKAN RASMI</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Sektor Pekerjaan : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="pekerjaan" name="pekerjaan"
                                class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="1">SEKTOR AWAM</option>
                                <option value="2">SEKTOR SWASTA</option>
                                <option value="3">BEKERJA SENDIRI</option>
                                <option value="4">PESARA</option>
                                <option value="5">TIDAK BEKERJA</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Pekerjaan : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Status Kahwin : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="status" name="status" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="5">ANAK DARA</option>
                                <option value="6">BALU</option>
                                <option value="7">JANDA</option>
                                <option value="8">JANDA BERHIAS</option>
                                <option value="9">THAYYIB</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Status Saudara Baru : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="saudara" name="saudara" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="1">YA</option>
                                <option value="2">TIDAK</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="text-right">
                            <button type="kembali" class="btn btn-primary">Kembali</button>
                            <button type="next" class="btn btn-primary">Seterusnya</button>
                        </div>
                    </div>
                </form>   
            </div>

            <div class="tab-pane" id="tab-2" role="tabpanel">
                <h4 class="tab-title">Maklumat Pasangan</h4>
                <form>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. KP : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Pasangan : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tarikh Lahir : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Umur : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Jantina : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Bangsa : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="bangsa" name="bangsa" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="01">MELAYU</option>
                                <option value="02">CINA</option>
                                <option value="03">INDIA</option>
                                <option value="04">BANGLADESHI</option>
                                <option value="05">PAKISTANI</option>
                                <option value="06">SRI LANKA</option>
                                <option value="07">INDONESIAN</option>
                                <option value="08">BUMIPUTERA SABAH</option>
                                <option value="10">BUMIPUTRA SARAWAK</option>
                                <option value="12">ORANG ASLI (SEMENANJUNG)</option>
                                <option value="13">LAIN-LAIN ASIA</option>
                                <option value="14">EUROPEAN</option>
                                <option value="15">ARAB</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Warganegara : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="WARGANEGARA" name="Tahun" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="01">WARGANEGARA</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat Dalam K/P : </label>
                        <div class="col-sm-9">
                            <input type="alamat" class="form-control">
                            <input type="checkbox" class="form-check-input" name="validation-checkbox">
                            <span class="form-check-label">Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam
                                K/P</span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No Telefon (Bimbit) : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No Telefon (Rumah) : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Taraf Pendidikan : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="taraf" name="taraf" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="1">PHD</option>
                                <option value="2">MASTER</option>
                                <option value="3">IJAZAH</option>
                                <option value="4">DIPLOMA</option>
                                <option value="5">STPM / HSC / SIJIL</option>
                                <option value="6">SPM / MCE</option>
                                <option value="7">PT3 / PMR / SRP / LC</option>
                                <option value="8">UPSR</option>
                                <option value="9">TIADA PENDIDIKAN RASMI</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Sektor Pekerjaan : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="pekerjaan" name="pekerjaan"
                                class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="1">SEKTOR AWAM</option>
                                <option value="2">SEKTOR SWASTA</option>
                                <option value="3">BEKERJA SENDIRI</option>
                                <option value="4">PESARA</option>
                                <option value="5">TIDAK BEKERJA</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Pekerjaan : </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Status Kahwin : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="status" name="status" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="5">ANAK DARA</option>
                                <option value="6">BALU</option>
                                <option value="7">JANDA</option>
                                <option value="8">JANDA BERHIAS</option>
                                <option value="9">THAYYIB</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Status Saudara Baru : </label>
                        <div class="col-sm-3">
                            <select class="form-select" id="saudara" name="saudara" class="form-control">
                                <option value="">-Sila Pilih-</option>
                                <option value="1">YA</option>
                                <option value="2">TIDAK</option>
                            </select></td>
                        </div>
                    </div>

                    <div class="mb-3 row justify">
                        <div class="text-right">
                            <button type="kembali" class="btn btn-primary">Kembali</button>
                            <button type="next" class="btn btn-primary">Seterusnya</button>
                        </div>
                    </div>
                </form>   
            </div>

            <div class="tab-pane" id="tab-3" role="tabpane3">
                <div class="text-center">
                <h5 class="tab-title">MAKLUMAT PERKAHWINAN</h5>
                </div>
                <hr>
                <form>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tarikh Mohon: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Pemohon: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Pasangan: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tempat Kahwin(Negara): </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>
                    <hr>

                    <div class="text-center">
                    <h5 class="tab-title">MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h5><hr>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tarikh Akad Nikah : </label>
                        <div class="col-sm-3">
                            <input type="date"  id="txtTkhNikah" name="txtTkhNikah" class="form-control" required >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat Tempat Kahwin: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Mas Kahwin: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Hantaran: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>
                    <hr>

                    <div class="text-center">
                    <h5 class="tab-title">MAKLUMAT WALI</h5><hr>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Hubungan Wali: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Wali: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No K/P Wali: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Umur: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tarikh Nikah Ibu Bapa : </label>
                        <div class="col-sm-3">
                            <input type="date"  id="txtTkhNikah" name="txtTkhNikah" class="form-control" required >
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat wali: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. Telefon Wali: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>
                    <hr>

                    <div class="text-center">
                    <h5 class="tab-title">MAKLUMAT SAKSI (1)</h5><hr>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Saksi: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. K/P Saksi: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. Telefon Saksi: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat Saksi: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>
                    <hr>

                    <div class="text-center">
                    <h5 class="tab-title">MAKLUMAT SAKSI (2)</h5><hr>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Saksi: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. K/P Saksi: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. Telefon Saksi: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat Saksi: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Kategori Nikah: </label>
                        <div class="col-sm-3">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="text-right">
                            <button type="kembali" class="btn btn-primary">Kembali</button>
                            <button type="next" class="btn btn-primary">Seterusnya</button>
                        </div>
                    </div>

                </form>   
            </div>

        </div>
    </div>
</div>
@stop

    
