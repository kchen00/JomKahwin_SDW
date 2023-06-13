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
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
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
                            <tr>
                                @foreach($i_incentive as $i_incentive)
                                @foreach($acc as $account)
                                <td>{{$loop->index+1}}</td>
                                <td>{{$account->A_icNum}}</td>
                                <td>{{$i_incentive->created_at}}
                                <td> @if ($i_incentive->I_applicationStatus === "Lulus")
                                    <span class="badge rounded-pill bg-success">{{ $i_incentive->I_applicationStatus}}</span>
                                    @elseif($i_incentive->I_applicationStatus === "Dalam Proses")
                                    <span class="badge rounded-pill bg-warning">{{ $i_incentive->I_applicationStatus}}</span>
                                    @else
                                    <span class="badge rounded-pill bg-danger">{{ $i_incentive->I_applicationStatus}}</span></td>
                                    @endif
                                <td>
                                    <a href="admin-view">
                                        <i class="text-dark ion ion-md-eye me-2"></i>
                                    </a>
                                     <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#update-{{ $i_incentive->I_incentiveID }}">
                                        <i class=" text-dark  fas fa-fw fa-pen"></i>
                                    </a>
                                    <a href="/admin-IncentiveDashboard/{{$i_incentive->I_incentiveID}}/delete">
                                        <i class="text-dark  fas fa-fw fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="update-{{ $i_incentive->I_incentiveID }}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="updateModalLabel">Update Application Status</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/admin-IncentiveDashboard/{{ $i_incentive->I_incentiveID }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="status">Status</label>
                                                    <select class="form-select" name="I_applicationStatus" id="status">
                                                        <option value="Lulus">Lulus</option>
                                                        <option value="Tidak Lulus">Tidak Lulus</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
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