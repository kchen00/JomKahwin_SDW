@extends('ManageSpecialIncentiveView.User.base')
@section('ManageSpecialIncentiveView.User.UserViewStatusIncentiveView')

<div class="container-fluid">
    <div class="header">
        <h1 class="header-title">
            Bantuan Insentif Khas
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Permohonan Baru</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    @if (!$i_incentive) <!-- Check if $i_incentive is null or empty -->
                    <a href="user-apply" class="btn btn-primary" style="float: right;">Daftar Baru</a>
                    @endif
                </div>
                <div class="card-body">
                    <table id="datatables-basic" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Bil</th>
                                <th>No K/P Pemohon</th>
                                <th>Tarikh Mohon</th>
                                <th>Status</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($i_incentive)
                            @foreach($i_incentive as $incentive)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>010516140273</td>
                                <td>{{$incentive->created_at}}</td>
                                <td>
                                    @if ($incentive->I_applicationStatus === "Lulus")
                                        <span class="badge rounded-pill bg-success">{{ $incentive->I_applicationStatus }}</span>
                                    @elseif($incentive->I_applicationStatus === "Dalam Proses")
                                        <span class="badge rounded-pill bg-warning">{{ $incentive->I_applicationStatus }}</span>
                                    @else
                                        <span class="badge rounded-pill bg-danger">{{ $incentive->I_applicationStatus }}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="user-view">
                                        <i class="text-dark ion ion-md-eye me-2"></i>
                                    </a>
                                    <a href="user-update">                                       
                                      <i class="text-dark fas fa-fw fa-pen"></i>
                                    </a>
                                    <a href="/user-status/{{$incentive->I_incentiveID}}/delete">
                                        <i class="text-dark fas fa-fw fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <!-- Table footer content here if needed -->
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
        datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
    });
</script>

@stop