@extends('ManageMarriageRequest.User.base')
@section('ManageMarriageRequest.User.searchKPView')



    <div class='header'>
        <h5>Search IC</h5>

        <div class="col-5 col-xl-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 text-sm-end">No.K/P Pasangan</label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="kad" class="form-control">&nbsp;
                                    &nbsp;<button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </div>




                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Nama Pasangan</th>
                                    <th style="width:25%">No.K/P Pasangan</th>
                                    <th style="width:25%">No.Siri</th>
                                    <th style="width:25%">Tarikh Permohonan</th>
                                    <th style="width:40%;">Status</th>
                                    <th>OPERASI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-search"></i></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mb-3 row text-right">
                            <div class="col-sm-10 ms-sm-auto">
                                <button type="submit" class="btn btn-primary">Kembali</button>
                                <button type="submit" class="btn btn-primary">Seterusnya</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>

@stop
