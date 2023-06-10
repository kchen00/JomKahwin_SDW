@extends('ManageMarriageRequestView.User.base')
@section('ManageMarriageRequestView.User.draftApplicant')

    <div class='header'>
        <table>
            <td width="80%" class="font14boldputih" bgcolor="#2f80ed"><b>&nbsp; PERMOHONAN BERKAHWIN >> MAKLUMAT PEMOHON</b>
            </td>
        </table>
        <br>

        <div class="col-6 col-lg-12">
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#primary-tab-1" data-bs-toggle="tab"
                            role="tab">MAKLUMAT PEMOHON </a></li>
                    <li class="nav-item"><a class="nav-link" href="#primary-tab-2" data-bs-toggle="tab"
                            role="tab">MAKLUMAT PASANGAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#primary-tab-3" data-bs-toggle="tab"
                            role="tab">MAKLUMAT PERKAHWINAN</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-1" role="tabpanel">
                            <form>
                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">No. KP : </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Nama Pasangan : </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Tarikh Lahir : </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Umur : </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Jantina : </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Bangsa : </label>
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
                                    <label class="col-form-label col-sm-1 text-sm-end">Warganegara : </label>
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
                                    <label class="col-form-label col-sm-1 text-sm-end">No Telefon (Bimbit) : </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">No Telefon (Rumah) : </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Taraf Pendidikan : </label>
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
                                    <label class="col-form-label col-sm-1 text-sm-end">Sektor Pekerjaan : </label>
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
                                    <label class="col-form-label col-sm-1 text-sm-end">Pekerjaan : </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Status Kahwin : </label>
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
                                    <label class="col-form-label col-sm-1 text-sm-end">Status Saudara Baru : </label>
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
                            </div>



                                <div class="tab-pane " id="tab-2" role="tabpanel">
                                    <div class="mb-3 row">
                                        <div class="text-right">
                                            <button type="kembali" class="btn btn-primary">Kembali</button>
                                            <button type="next" class="btn btn-primary">Seterusnya</button>
                                        </div>
                                    </div>

                        </div>


                    <div class="tab-pane " id="tab-2" role="tabpanel">
                        <div class="mb-3 row">
                            <div class="text-right">
                                <button type="kembali" class="btn btn-primary">Kembali</button>
                                <button type="next" class="btn btn-primary">Seterusnya</button>
                            </div>
                        </div>

                </div> - tab content 
                
            </div>  
        </div> 
@stop
