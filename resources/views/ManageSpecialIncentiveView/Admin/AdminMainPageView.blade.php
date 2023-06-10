@extends('ManageSpecialIncentiveView.Admin.base')
@section('ManageSpecialIncentiveView.Admin.AdminMainPageView')


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
                <div class="card-body">
                  
                    <table id="datatables-buttons" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Bil</th>
                                <th>No K/P Pemohon</th>
                                <th>No K/P Pasangan</th>
                                <th>Tarikh Mohon</th>
                                <th>Status</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($i_incentive as $i_incentive)
                                <td>{{$loop->index+1}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-sm">
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#update-{{ $i_incentive->id }}">
                                      <i class=" text-dark  fas fa-fw fa-pen"></i>
                                    </a>
                                  </td>
                                        </tr>
                                                         <!--Modal Kemaskini-->
                                                         <div class="modal fade" id="update-{{ $i_incentive->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Status Permohonan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form method="POST" action="/admin-dashboard/{{ $i_incentive->id }}">
                                                          @csrf 
                                                          @method('PUT')
                                                          <input type="hidden" name="id" value="{{$i_incentive->id}}">         
                                                            <div class="form-group">
                                                              <label for="inputType" class="form-label">Keputusan</label>
                                                              <select class="form-select" name="keputusan" value="{{$i_incentive->I_applicationStatus}}">
                                                               <option @if ($i_incentive->I_applicationStatus == 'Lulus') selected @endif value="Lulus">Lulus
                                                               <option @if ($i_incentive->I_applicationStatus == 'Tidak Lulus') selected @endif value="Tidak Lulus">Tidak Lulus
                                                                </select>
                                                            </div>
                                                          <br>                                         
                                                          <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">CLOSE</button>
                                                          <button type="submit"class="btn btn-primary" >UPDATE</button>
                                                            </form>
                                                          </div>
                                                        </div>
                                                        </div>
                                                        </div>            
                                        @endforeach
                        </tbody>
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