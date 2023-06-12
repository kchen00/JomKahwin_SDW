@extends('ManageSpecialIncentiveView.Admin.base')
@section('ManageSpecialIncentiveView.Admin.AdminMainPageView')


<div class="container-fluid">

    <div class="header">
        <h1 class="header-title">
            Bantuan Insentif Khas
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard-default.html">Bantuan Insentif Khas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Permohonan Baru</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="user-apply" class="btn btn-info" style="float: right;">Daftar Baru</a>
                </div>
                <div class="card-body">
                  
                    <table id="datatables-basic" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Bil</th>
                                <th>No K/P Pemohon</th>
                                <th>No K/P Nama Pasangan</th>
                                <th>Tarikh Mohon</th>
                                <th>Status</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($i_incentive as $i_incentive)
                                @foreach($account as $account)
                                <td>{{$loop->index+1}}</td>
                                <td>{{$account->A_icNum}}</td>
                                <td></td>
                                <td></td>
                                <td> @if ($i_incentive->I_applicationStatus === "Lulus")
                                    <span class="badge rounded-pill bg-success">{{ $i_incentive->I_applicationStatus}}</span>
                                    @elseif($i_incentive->I_applicationStatus === "Sedang diproses")
                                    <span class="badge rounded-pill bg-warning">{{ $i_incentive->I_applicationStatus}}</span>
                                    @else
                                    <span class="badge rounded-pill bg-danger ">{{ $i_incentive->I_applicationStatus}}</span></td>
                                    @endif</td>
                                <td>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalDetails-{{ $i_incentive->id }}" >
                                        <i class="text-dark ion ion-md-eye me-2"></i>
                                    </a>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#update-{{ $i_incentive->id }}">
                                        <i class=" text-dark  fas fa-fw fa-pen"></i>
                                    </a>
                                    <a href="/user-status/{{$i_incentive->id}}/delete">
                                        <i class="text-dark  fas fa-fw fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
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