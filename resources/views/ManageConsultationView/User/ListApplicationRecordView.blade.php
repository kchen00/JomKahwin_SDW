@extends('ManageConsultationView.User.base')
@section('ManageConsultationView.User.ListApplicationRecordView')

<div class="header">
    <h1 class="header-title">
        Khidmat Nasihat
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="mainConsultation">Khidmat Nasihat</a></li>
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

                    @if ($records->isEmpty())
                    <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td colspan="6" align="center">Tiada Rekod</td>
                    </tr>
                    @else
                    @foreach ($records as $record)
                    <tr bgcolor="#FFFFFF" class="font12" height="30">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $record->A_icNum }}</td>
                        <td>{{ $record->M_partnerIC }}</td>
                        <td>{{ $record->aduan_date }}</td>
                        <td>{{ $record->CO_applicationStatus }}</td>
                        <td>Operasi</td>
                    </tr>
                    @endforeach
                    @endif
                </table><br>

                <div style="text-align: center;">
                    <p style="color:#192D95;"><b>Sila klik ‘Daftar Baru’ jika ingin membuat aduan / khidmat nasihat</b></p>
                    <a href="{{ route('listApplication.applyConsultation') }}" class="btn btn-primary">Daftar Baru</a>
                </div>

            </div>
        </div>
    </div>
</div>

@stop
