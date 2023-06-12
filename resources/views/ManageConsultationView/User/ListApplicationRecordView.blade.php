@extends('ManageConsultationView.User.base')
@section('ManageConsultationView.User.ListApplicationRecordView')


<div class="header">
    <h1 class="header-title">
        Khidmat Nasihat
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Khidmat Nasihat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rekod Permohonan</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Rekod Permohonan</h5>
            </div>
            <div class="card-body">
            <table bgcolor="#2F72B9" cellpadding="0" cellspacing="1" align="center" width="100%">
                
                <tr bgcolor="#CCCCCC" class="font14bold" height="25" align="center">
                <td width="5%">Bil</td>
                <td width="25%">No. KP/Nama Pengadu</td>
                <td width="23%">No. KP/Nama Pasangan/Nama Kene Adu</td>
                <td width="15%">Tarikh Aduan</td>
                <td width="17%">Status</td>
                <td width="15%">Operasi</td>
                </tr>

                <tr bgcolor="#FFFFFF" class="font12" height="30">
                <td colspan="6" align="center">Tiada Rekod</td>
                </tr>
        
			</table><br>

            <div style="text-align: center;">
            <p style="color:#192D95;"><b>Sila klik ‘Daftar Baru’ jika ingin membuat aduan / khidmat nasihat bagi pasangan 012345011234</b></p>   
            <a href="applyConsultation" class="btn btn-primary">Daftar Baru</a>
            </div>
                        
            </div>
        </div>
    </div>
</div>


@stop