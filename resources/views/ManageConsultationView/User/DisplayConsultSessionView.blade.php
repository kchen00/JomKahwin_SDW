@extends('ManageConsultationView.User.base')
@section('ManageConsultationView.User.DisplayConsultSessionView')


<div class="header">
    <h1 class="header-title">
        Khidmat Nasihat
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Khidmat Nasihat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Maklumat Sesi Khidmat Nasihat</li>
        </ol>
    </nav>

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"><b>Sesi Khidmat Nasihat</b></h5>
            </div>
            <div class="card-body" align="center">
            <table>
                        <tr>
                            <th>Tarikh:</th>
                            <th>25/01/2023</th>
                        </tr>
                        <tr>
                            <th>Masa:</th>
                            <th>10:00 Pagi</th>
                            
                        </tr>
                        <tr>
                            <th>Tempat:</th>
                            <th>PAID Pekan</th>
                            
                        </tr>
                        <tr>
                            <th>Penasihat:</th>
                            <th>En. Hilmi</th>
                           
                        </tr>
            </table><br>

            <div class="card-body" style="text-align: center;">
                    <td><button class="btn btn-primary" title="Print" onclick="printApplication()">Cetak</button></td>
                    <td><a href="applyChange" class="btn btn-primary">Mohon Penukaran Sesi</a></td>
            </div>
                        
            </div>
        </div>
    </div>
</div>

<script>
    function printApplication() {
      alert("Printing the application");
    }
</script>

@stop