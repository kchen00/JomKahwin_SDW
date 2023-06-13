@extends('ManageMarriageRequestView.User.base')
@section('ManageMarriageRequestView.User.waliDocumentView')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">PERSETUJUAN WALI DAN WAKALAH WALI</h5>
            </div>
            <div class="card-body">

                <style>
                    .text-align {
                        text-align: center;
                        margin: left;
                    }
                </style>

                <hr>
                <h4 class="tab-title text-align">PERSETUJUAN WALI</h4>
                <hr>
                <form>
                    <p>Saya............................................................................No.Kad
                        Pengenalan........................................adalah..................................kepada.....................................dengan
                        ini membuat pengakuan bahawa sata bersetuju dengan perkahwinan di
                        antara...................................dengan.......................................mas
                        kahwinnya.......................*tunai/hutang. Saya akan mengakad nikahkan sendiri perkahwinan ini.
                    </p><br><br>

                    <div class="mb-0 row">
                        <label class="col-form-label col-sm-1 text-sm-end">Tarikh : </label>
                        <div class="col-sm-8">
                            <input type="date" id="txtTkhNikah" name="txtTkhNikah" class="form-control" required>
                        </div>
                    </div>
                    <hr>

                    <h4 class="tab-title text-align">PERSETUJUAN WAKALAH WALI</h4>
                    <hr>

                    <p>Saya............................................................................No.Kad
                        Pengenalan........................................adalah................................kepada.......................................dengan
                        ini mewakilikan kepada..........................No.Kad
                        Pengenalan............................sebagai............................(Jawatan)
                        untuk.....................mengakadnikahkan......................(hubungan)
                        saya........................dengan mas kahwinnya....................*tunai/hutang.</p><br><br>

                    <div class="mb-0 row">
                        <label class="col-form-label col-sm-1 text-sm-end">Tarikh : </label>
                        <div class="col-sm-8">
                            <input type="date" id="txtTkhNikah" name="txtTkhNikah" class="form-control" required>
                        </div>
                    </div><br><br><br>

                    <div class="mb-3 row">
                        <label>TANDATANGAN WALI</label><br><br><br><br><br>
                        <label>TANDATANGAN WAKILAH WALI</label><br><br><br><br><br>
                    </div>
                    <hr>

                    <h4 class="tab-title text-align">SAKSI WAKALAH WALI</h4>
                    <hr>

                    <div class="mb-3 row">
                        <label>Nama Saksi 1 : RAZALI BIN KAMAL </label>
                    </div>

                    <div class="mb-3 row">
                        <label>No.K/P Saksi : 990201030011 </label>
                    </div>

                    <div class="mb-3 row">
                        <label>No. Telefon Saksi : 0191197653 </label>
                    </div>

                    <div class="mb-3 row">
                        <label>Alamat Saksi : PT99 TAMAN BUNGA 26600,PEKAN,PAHANG </label>
                    </div>

                    <div class="mb-3 row">
                        <label>Nama Saksi 2 : DANIAL BIN WAN</label><br>
                    </div>

                    <div class="mb-3 row">
                        <label>No.K/P Saksi : 970206030033 </label><br>
                    </div>

                    <div class="mb-3 row">
                        <label>No Telefon Saksi : 0111197653 </label><br>
                    </div>

                    <div class="mb-3 row">
                        <label>Alamat Saksi : KP0098 TAMAN BANDAR 26100,KUANTAN,PAHANG </label><br>
                    </div>

                    <div class="mb-3 row">
                        <label>TANDATANGAN WALI</label><br><br><br><br><br>
                        <label>TANDATANGAN WAKILAH WALI</label><br><br><br><br><br>
                    </div>
                    <hr>

                    <h4 class="tab-title text-align">PENGESAHAN WAKALAH WALI</h4>
                    <hr>

                    <p>Saya............................................................................mengesahkan bahawa
                        Wakalah Wali di atas adalah dibuat di hadapan saya di........................................dan ia
                        mengikut kehendak Hukum Syarak.</p><br><br>

                    <div class="mb-0 row">
                        <label class="col-form-label col-sm-1 text-sm-end">Tarikh : </label>
                        <div class="col-sm-8">
                            <input type="date" id="txtTkhNikah" name="txtTkhNikah" class="form-control" required>
                        </div>
                    </div><br>

                    <div class="mb-3 row">
                        <label>TANDATANGAN PENDAFTAR</label><br><br><br><br><br>
                        <label>CAP RASMI</label><br><br><br><br><br>
                    </div><br>

                    <div class="col-sm-17 ms-sm-auto" style="display: flex; justify-content: center; align-items: center;">
                        <a href="applicant" class= "btn btn-primary mr-6 ">Kembali</button></a>&nbsp;&nbsp;
                        <a href="document" class= "btn btn-primary mr-6 ">Seterusnya</button></a>&nbsp;&nbsp;
                        {{-- <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp; --}}
                        <button type="submit" class="btn btn-primary">Cetak</button>
                    </div>


                </form>
            </div>
        </div>
    </div>




@stop
