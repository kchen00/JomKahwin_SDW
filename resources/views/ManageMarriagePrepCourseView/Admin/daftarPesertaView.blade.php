@extends('ManageMarriagePrepCourseView.Admin.base')
@section('ManageMarriagePrepCourseView.Admin.daftarPesertaView')


    <div class='header'>
        <h5>DAFTAR PESERTA>>Pendaftaran</h5>

        <div class="col-5 col-xl-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 text-sm-end">No. K/P Peserta </label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="kad" class="form-control"> &nbsp;
                                    &nbsp;<button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </div>

                        </div>



                        <div class="col-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:40%;">Bil</th>
                                            <th style="width:25%">Tarikh Permohonan</th>
                                            <th style="width:25%">No Permohonan</th>
                                            <th style="width:25%">Nama Pemohon</th>
                                            <th style="width:40%;">No. Kad Pengenalan</th>
                                            <th style="width:40%;">No.Siri</th>
                                            <th>Operasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>27/01/2023</td>
                                            <td>TLOH4P/2023-0044</td>
                                            <td>AHMAD ZULHILMI BIN MOHD</td>
                                            <td>010115110021</td>
                                            <td>TLOH/001/2023</td>
                                            <td class="table-action">
                                                <a href="#"><i class="align-middle fas fa-fw fa-search"></i></i></a>
                                                <a href="#"><i
                                                        class="align-middle fas fa-fw fa-check-square"></i></i></a>
                                                <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><br><br>

                                <div class="col-sm-17 ms-sm-auto"
                                    style="display: flex; justify-content: center; align-items: center;">
                                    <a href="tempat" class= "btn btn-primary mr-6 ">Kembali</button></a>&nbsp;&nbsp;
                                    <a href="kehadiran" class= "btn btn-primary mr-6 ">Seterusnya</button>&nbsp;&nbsp;</a>
                                    {{-- <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp; --}}
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>

@stop
