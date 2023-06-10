@extends('ManageConsultationView.Admin.base')
@section('ManageConsultationView.Admin.ManageConsultSessionView')


<div class="header">
    <h1 class="header-title">
        Urusan Khidmat Nasihat
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Urusan Khidmat Nasihat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Penetapan Maklumat Sesi</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Penetapan Maklumat Sesi</h5>
            </div>

                    <div class="card-body">
                        <form method="POST" action="">
                                    @csrf 
                                    <div class="row">
                                    <div class="mb-3 col-md-4">
                                        
                                    <label for="dateReqConsult">Tarikh</label>
                                    <input type="date" class="form-control" id="dateReqConsult" name="dateReqConsult"><br>
                                    <label for="timeReqConsult">Masa</label>
                                    <input type="time" class="form-control" id="timeReqConsult" name="timeReqConsult"><br>
                                    <label for="pendapatan">PAID Pilihan</label>
                                    <input type="text" class="form-control" id="paidpilihan" name="paidpilihan"><br>
                                    <label for="penasihat">Penasihat</label><br>
                                    <input type="text" class="form-control" id="penasihat" name="penasihat"><br>
                                    
                                    </div>
                                    </div>
                            </form>

                            <div class="card-body" style="text-align: center;">
                                <td><button type="submit"class="btn btn-primary">Hantar</button></td>
                                <td><button type="submit"class="btn btn-primary">Kembali</button></td><br>
                            </div>
                    </div>
        </div>
    </div>
</div>




@stop