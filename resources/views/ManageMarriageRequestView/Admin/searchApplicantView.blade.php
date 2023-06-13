@extends('ManageMarriageRequestView.Admin.base')
@section('ManageMarriageRequestView.Admin.searchApplicantView')

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
                                    <th style="width:40%;">BIL</th>
                                    <th style="width:25%">NAMA PEMOHON</th>
                                    <th style="width:25%">NO.K/P PEMOHON</th>
                                    <th style="width:25%">NAMA PASANGAN</th>
                                    <th style="width:40%;">NO.K/P PASANGAN</th>
                                    <th style="width:40%;">STATUS</th>
                                    <th style="width:40%;">OPERASI</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>AHMAD ZULHILMI BIN MOHD</td>
                                    <td>980115110021</td>
                                    <td>NUR AMIRA BINTI YUSOF</td>
                                    <td>980119030022</td>
                                    <td>Untuk Diluluskan</td>
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle fas fa-fw fa-search"></i></i></a>
                                        <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></i></a>
                                    </td>

                                </tr>

                                <td>2</td>
                                <td>SITI MARYAM BINTI KHALID</td>
                                <td>990218060806</td>
                                <td>SYAFIQ BIN MALIK</td>
                                <td>980312065433</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle fas fa-fw fa-check-square"></i></i></a>
                                </td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle fas fa-fw fa-search"></i></i></a>
                                    <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></i></a>
                                </td>
                                </tr>

                            </tbody>
                        </table>

                        <div class="col-sm-17 ms-sm-auto" style="display: flex; justify-content: center; align-items: center;">
                            <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                            <a href="info" class= "btn btn-primary mr-6 ">Seterusnya</button></a>&nbsp;&nbsp; 
                            {{-- <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp; --}}
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

@stop
