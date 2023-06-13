@extends('ManageMarriageRequestView.User.base')
@section('ManageMarriageRequestView.User.documentView')

    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    DOCUMENTS
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard-default.html">HIV Form</a></li>
                        <li class="breadcrumb-item"><a href="#">Pemastautinan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kebenaran Berkahwin</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Semua Borang di bawah wajib DICETAK !!!</h5>
                        </div>

                    </div>
                </div>

                <div class="col-6 col-lg-12">
                    <div class="tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#tab-1" data-bs-toggle="tab"
                                    role="tab">UJIAN SARINGAN HIV</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-2" data-bs-toggle="tab"
                                    role="tab">AKUAN PEMASTAUTINAN</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-3" data-bs-toggle="tab"
                                    role="tab">PERMOHONAN KEBENARAN BERKAHWIN</a></li>
                        </ul>
                        <div class="tab-content">
                            <style>
                                .text-align {
                                    text-align: center;
                                    margin: left;
                                }
                            </style>
                            <div class="tab-pane active" id="tab-1" role="tabpanel">
                                <hr>
                                <h4 class="tab-title text-align">BAHAGIAN I : BUTIRAN PEMOHON</h4>
                                <hr>
                                <p>Saya.........................Alamat...................................................No.Kad
                                    Pengenalan......................................No. Tel........................dengan
                                    ini BERSETUJU/TIDAK BERSETUJU secara sedar dan tanpa sebarang paksaan untuk menjalani
                                    ujian saringan HIV dan ujian-ujian yang berkaitan, memaklumkan keputusan untuk saringan
                                    HIV kepada pasangan dan menjalani sesi kaunseling bersama pasangan sekirnya diperlukan.
                                </p>
                                <div class="mb-3 row">
                                    <label>Tarikh: </label>
                                    <label>Tandatangan(Pemohon) : </label><br><br><br><br>
                                </div>
                                <hr>

                                <h4 class="tab-title text-align">BAHAGIAN II : DIISI OLEH PEGAWAI PERUBATAN KERAJAAN</h4>
                                <hr>

                                <p>Klinik Kesihatan</p><br>
                                <p>Saya, Pengamal Perubatan seperti yang dinyatakan di bawah dengan ini mengesahkan bahawa
                                    ujian saringan HIV telah dilakukan terhadap
                                    Encik/Cik...............................................di klinik ini dan keputusannya
                                    adalah............................
                                </p>
                                <div class="mb-3 row">
                                    <label>Tarikh: </label>
                                    <label>Tandatangan(Pengamal Perubatan) : </label><br><br><br><br>
                                    <label>Nama & Cop Jawatan: </label>
                                </div>

                                <div class="col-sm-17 ms-sm-auto"
                                    style="display: flex; justify-content: center; align-items: center;">
                                    <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-primary">Cetak</button>
                                </div>

                            </div>

                            <style>
                                .text-align {
                                    text-align: center;
                                    margin: left;
                                }
                            </style>

                            <div class="tab-pane" id="tab-2" role="tabpanel">
                                <hr>
                                <h4 class="tab-title text-align">BAHAGIAN 1 : BUTIRAN PEMOHON</h4>
                                <hr>
                                <form>
                                    <div class="mb-3 row">
                                        <label>No. KP : 982303060503 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Nama Pemohon : AHMAD BIN ZUKI </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Alamat : KP1002,TAMAN METARI, 26600,KUANTAN PAHANG </label>
                                    </div>

                                    <div class="mb-0 row">
                                        <label class="col-form-label col-sm-1 text-sm-end">Tarikh : </label>
                                        <div class="col-sm-8">
                                            <input type="date" id="txtTkhNikah" name="txtTkhNikah" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <hr>

                                    <h4 class="tab-title text-align">BAHAGIAN 2 : PENGESAHAN PEMASTAUTINAN (DIISI OLLEH
                                        PEGAWAI)</h4>
                                    <hr>
                                    <p>Saya..................................No. Kad
                                        Pengenalan..................selaku.....................setelah meneliti secara
                                        terperinci, dan berpuas hati dengan yang diberikan oleh <b>AHMAD BIN ZUKI</b>. Oleh
                                        yang demikian,saya mengesahkan bahawa penama di atas adalah salah seorang yang
                                        bermautautin di kawasan saya dan beliau berada di sini sejak............bulan/tahun.
                                    </p>


                                    <div class="mb-0 row">
                                        <label class="col-form-label col-sm-1 text-sm-end">Tarikh : </label>
                                        <div class="col-sm-8">
                                            <input type="date" id="txtTkhNikah" name="txtTkhNikah" class="form-control"
                                                required>
                                        </div>
                                    </div><br>

                                    <div class="mb-3 row">
                                        <label>TANDATANGAN DAN COP RASMI </label><br><br><br>
                                    </div>


                                </form><br>

                                <div class="col-sm-17 ms-sm-auto"
                                    style="display: flex; justify-content: center; align-items: center;">
                                    <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-primary">Cetak</button>
                                </div>
                            </div>

                            <style>
                                .text-align {
                                    text-align: center;
                                    margin: left;
                                }
                            </style>

                            <div class="tab-pane" id="tab-3" role="tabpanel">
                                <h4 class="tab-title text-align">A.BUTIRAN PEMOHON</h4>
                                <hr>
                                <form>
                                    <div class="mb-3 row">
                                        <label>No. KP : 982303060503 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Nama Pemohon : AHMAD BIN ZUKI </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Alamat : KP1002,TAMAN METARI, 26600,KUANTAN PAHANG </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Umur : 25 TAHUN </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>No.Telefon : 0104567832 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Bangsa : MELAYU </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Warganegara : WARGANEGARA </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Status Perkahwinan : TERUNA </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Sektor Pekerjaan : SEKTOR AWAM </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Pekerjaan/Jawatan : PENSYARAH (UMP) </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Pendapatan : RM6000.00 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Taraf Pendidkan : PHD </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>STATUS SAUDARA BARU : TIDAK </label>
                                    </div>
                                    <hr>

                                    <h4 class="tab-title text-align">B.BUTIRAN PASANGAN</h4>
                                    <hr>

                                    <div class="mb-3 row">
                                        <label>No. KP : 982303060503 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Nama Pasangan : AISHAH BINTI ALI </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Alamat : KP1002,TAMAN PERAMU, 26600,KUANTAN PAHANG </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Umur : 25 TAHUN </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>No.Telefon : 0105637832 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Bangsa : MELAYU </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Warganegara : WARGANEGARA </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Status Perkahwinan : TERUNA </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Sektor Pekerjaan : SEKTOR AWAM </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Pekerjaan/Jawatan : CIKGU </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Pendapatan : RM5000.00 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Taraf Pendidkan : IZAJAH </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>STATUS SAUDARA BARU : TIDAK </label>
                                    </div>
                                    <hr>

                                    <h4 class="tab-title text-align">C.BUTIRAN CADANGAN MAJLIS AKAD NIKAH</h4>
                                    <hr>

                                    <div class="mb-3 row">
                                        <label class>Tarikh Akad Nikah : 3/02/2023 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Alamat Tenmpat Kahwin : Kuantan </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Mas Kahwin : RM22.50 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Hantaran : RM20000</label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Pemberian Lain : - </label>
                                    </div>
                                    <hr>

                                    <h4 class="tab-title text-align">D.BUTIRAN WALI</h4>
                                    <hr>

                                    <div class="mb-3 row">
                                        <label class>Hubungan : Bapa </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Nama Wakil : Zuki Bin Abu </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>No.K/P Wali : 600420063427 </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Umur : 63 Tahun </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class>Tarikh Nikah Ibu Bapa : 01-01-1940 </label>
                                    </div>


                                    <div class="mb-3 row">
                                        <label>Alamat Wali : KP1001, TAMAN PERAMU, 26600,PEKAN PAHANG </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>No.Telefon Wali : 01313234567 </label>
                                    </div>

                                    <p><b>Persetujuan Dan Pengakuan Wali:</b></p>
                                    <p>Saya dengan ini sesungguhnya bersetuju terhadap perkahwinan yang dicadangkan ini dan
                                        saya sesungguhnya mengaku bahawa segala maklumat yang terkandung di <b>BAHAGIAN
                                            D</b> adalah benar dan sekiranya maklumat ini palsu, maka saya boleh didakwa dan
                                        disabitkan di bawah Seksyen 38 Enakmen Undang-Undang Keluarga Islam 2005.</p>

                                    <div class="mb-3 row">
                                        <label>Tarikh : </label>
                                    </div>

                                    <div class="mb-3 row">
                                        <label>Tandatangan : </label>
                                    </div>
                                </form>

                                <div class="col-sm-17 ms-sm-auto"
                                    style="display: flex; justify-content: center; align-items: center;">
                                     <a href="wali" class= "btn btn-primary mr-6 ">Kembali</button></a>&nbsp;&nbsp;
                                     <a href="semak" class= "btn btn-primary mr-6 ">Seterusnya</button></a>&nbsp;&nbsp; 
                                    {{-- <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp; --}}
                                    <button type="submit" class="btn btn-primary">Cetak</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>



            @stop
