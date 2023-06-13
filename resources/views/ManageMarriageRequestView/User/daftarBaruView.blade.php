@extends('ManageMarriageRequestView.User.base')
@section('ManageMarriageRequestView.User.daftarBaruView')



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
                                    <td>AISYAH BINTI ALI</td>
                                    <td>750313060802</td>
                                    <td>DN3/2023-087632</td>
                                    <td>15 JAN 2023</td>
                                    <td>BELUM HANTAR</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-search"></i></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        
                        <div class="col-sm-17 ms-sm-auto" style="display: flex; justify-content: center; align-items: center;">
                           
                            <button type="submit" class="btn btn-primary">Kembali</button>&nbsp;&nbsp; 
                            <a href="applicant" class= "btn btn-primary mr-6 ">Seterusnya</button></a>&nbsp;&nbsp;
                            
                            {{-- <button type="submit" class="btn btn-primary mr-6  onclick=kembali()">Kembali</button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary onclick=seterusnya()">Seterusnya</button>&nbsp;&nbsp; --}}
                        </div>

                       
                </div>
            </div>
            </form>
        </div>
    </div>

   

@stop
