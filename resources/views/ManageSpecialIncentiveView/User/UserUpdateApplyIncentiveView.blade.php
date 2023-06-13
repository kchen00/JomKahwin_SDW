@extends('ManageSpecialIncentiveView.User.base')

@section('ManageSpecialIncentiveView.User.UserUpdateApplyIncentiveView')

<div class="container-fluid">
    <div class="header">
        <h1 class="header-title">
            Bantuan Insetif Khas
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Maklumat</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0 text-white" style="background: #153d77;">Dokumen Pemohon</h5>
                </div>
                <div class="card-body">
                    <div style="display: flex; flex-direction: column;">
                        <div>
                            <span><b>Slip Gaji 3 bulan Terkini:</b></span>
                            <span><a href="user-viewDocument" target="_blank">slipgaji.pdf</a></span>
                        </div>
                    </div>      
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-0 text-white" style="background: #153d77;">Maklumat Pemohon</h5>
                </div>
                <div class="card-body">
                    <div style="display: flex; flex-direction: column;">
                        <div>
                            <span><b>No Kad Pengenalan:</b></span>
                            <input type="text" value="010516140273">
                        </div>
                        <div>
                            <span><b>Nama:</b></span>
                            <input type="text" value="Abi bin Bakar">
                        </div>
                        <div>
                            <span><b>Alamat:</b></span>
                            <input type="text" value="Jalan Tegak, Pekan Pahang">
                        </div>
                        <div>
                            <span><b>No Telefon:</b></span>
                            <input type="text" value="0198767789">
                        </div>
                        <div>
                            <span><b>Nama Bank:</b></span>
                            <input type="text" value="Bank Islam">
                        </div>
                        <div>
                            <span><b>Nombor Akaun Bank:</b></span>
                            <input type="text" value="123456788">
                        </div>
                        <div>
                            <span><b>Sektor Pekerjaan:</b></span>
                            <input type="text" value="Kerajaan">
                        </div>
                        <div>
                            <span><b>Alamat Pekerjaan:</b></span>
                            <input type="text" value="Iwrana Sdn Bhd. Kuantan Pahang">
                        </div>
                        <div>
                            <span><b>Gaji:</b></span>
                            <input type="text" value="RM3500.00">
                        </div>
                    </div>      
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-0 text-white" style="background: #153d77;">Maklumat Pasangan</h5>
                </div>
                <div class="card-body">
                    <div style="display: flex; flex-direction: column;">
                        <div>
                            <span><b>No Kad Pengenalan:</b></span>
                            <input type="text" value="020809067888">
                        </div>
                        <div>
                            <span><b>Nama:</b></span>
                            <input type="text" value="Siti bin Ubi">
                        </div>
                        <div>
                            <span><b>Alamat:</b></span>
                            <input type="text" value="Jalan Tegak, Pekan Pahang">
                        </div>
                        <div>
                            <span><b>No Telefon:</b></span>
                            <input type="text" value="0197657789">
                        </div>
                    </div>      
                </div>
                <div class="card-header">
                    <h5 class="card-title mb-0 text-white" style="background: #153d77;">Maklumat Lain-lain</h5>
                </div>
                <div class="card-body">
                    <div style="display: flex; flex-direction: column;">
                        <div>
                            <span><b>Nama Saudara Terdekat:</b></span>
                            <input type="text" value="Omar bin Ali">
                        </div>
                        <div>
                            <span><b>Nombor Telefon Saudara Terdekat:</b></span>
                            <input type="text" value="0198767789">
                        </div>
                        <div>
                            <span><b>Alamat Saudara Terdekat:</b></span>
                            <input type="text" value="Jalan Mawar, Temerloh Pahang">
                        </div>
                        <div>
                            <span><b>Hubungan:</b></span>
                            <input type="text" value="Sepupu">
                        </div>
                    </div>      
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" onclick="showPopup()">Update</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showPopup() {
            alert("Maklumat berjaya dikemaskini!");
        }
    </script>

@stop
