@extends('ManageSpecialIncentiveView.User.base')
@section('ManageSpecialIncentiveView.User.UserViewStatusIncentiveView')


<div class="container-fluid">

    <div class="header">
        <h1 class="header-title">
            Bantuan Insentif Khas
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard-default.html">Bantuan Perkahwinan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Permohonan Baru</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="user-apply" class="btn btn-primary" style="float: right;">Daftar Baru</a>
                </div>
                <div class="card-body">
                  
                    <table id="datatables-basic" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Bil</th>
                                <th>K/P Nama Pemohon</th>
                                <th>No. Slip Permohonan</th>
                                <th>Tarikh Mohon</th>
                                <th>Status</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables basic
        $('#datatables-basic').DataTable({
            responsive: true
        });
        // Datatables with Buttons
        var datatablesButtons = $('#datatables-buttons').DataTable({
            lengthChange: !1,
            buttons: ["copy", "print"],
            responsive: true
        });
        datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
    });
</script>

@stop