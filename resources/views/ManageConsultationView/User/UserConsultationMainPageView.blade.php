@extends('ManageConsultationView.User.base')
@section('ManageConsultationView.User.UserConsultationMainPageView')


<div class="header">
    <h1 class="header-title">
        Khidmat Nasihat
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Khidmat Nasihat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Khidmat Nasihat</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-11">
    
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            
            <div class="card-body" style="text-align: center;">
                <label for="ICnum">No.K/P / Passport Kene Adu</label>
                <form name="formNasihat" method="post">
		            <td><input type="text" name="ICnum" id="ICnum"></td>
		            <td><button type="submit"class="btn btn-primary">Semak</button></td>
	            </form><br>
                <h5 style="border-style: solid; border: 1px solid blue; border-radius: 8px; padding: 5px;">Sila Masukkan No. Kad Pengenalan Pasangan/Kena Adu Terlebih Dahulu</h5><br>
                <p style="color:#192D95;"><i>Nota: Aduan bagi Wali Enggan hanya benar dimohon oleh pihak Perempuan sahaja.
Sekiranya pihak Perempuan ingin membuat aduan bagi Wali Enggan, sila masukkan No.Kad Pengenalan Wali Enggan tersebut dan klik butang semak.</i></p>   
            </div>
        </div>
    </div>
</div>

@stop