@extends('ManageMarriageRequestView.User.base')
@section('ManageMarriageRequestView.User.senaraiSemakView')

    <div class='header'>
        <h5>SENARAI SEMAK</h5>

        <div class="col-5 col-xl-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form>

                        <div class="mb-2">
                            <label class="form-label"></label>
                            <textarea class="form-control text-center"
                                placeholder=" NAMA PEMOHON : AHMAD BIN ZUKI&#10;NAMA PASANGAN : AISYAH BIN ALI"&#10; rows="2"></textarea>
                        </div>


                        <div class="col-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">

                                </div>

                                <style>
                                    .form-container {
                                        display: flex;
                                        justify-content: center;
                                        /* Center the container horizontally */
                                    }

                                    .form-container table {
                                        display: inline-block;
                                        /* Make the table inline block */
                                    }

                                    table {
                                        border-collapse: collapse;
                                        margin-left: auto;
                                        margin-right: auto;
                                    }

                                    th,
                                    td {
                                        border: 1px solid black;
                                        padding: 8px;
                                        text-align: center;
                                    }
                                </style>

                                <div class="form-container">

                                    <table style="border:1px solid black  margin-left:auto; margin-right: auto; ">
                                        <thead>
                                            <tr>
                                                <th>PERSETUJUAN WALI DAN WAKALAH WALI <font color="#FF0000"> *</font>
                                                </th>
                                                <td>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-upload"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-trash"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-check"></i></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>BORANG UJIAN SARINGAN HIV <font color="#FF0000"> *</font>
                                                </th>
                                                <td><a href="#"><i
                                                            class="align-middle fas fa-fw fa-upload"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-trash"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-check"></i></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>AKUAN PEMASTAUTINAN <font color="#FF0000"> *</font>
                                                </th>
                                                <td><a href="#"><i
                                                            class="align-middle fas fa-fw fa-upload"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-trash"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-check"></i></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>BORANG PERMOHONAN KEBENARAN BERKAHWIN <font color="#FF0000"> *</font<
                                                            /th>
                                                <td><a href="#"><i
                                                            class="align-middle fas fa-fw fa-upload"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-trash"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-check"></i></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>BUKTI PEMBAYARAN <font color="#FF0000"> *</font>
                                                </th>
                                                <td><a href="#"><i
                                                            class="align-middle fas fa-fw fa-upload"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-trash"></i></i></a>
                                                    <a href="#"><i
                                                            class="align-middle fas fa-fw fa-check"></i></i></a>
                                                </td>
                                            </tr>


                                        </thead>

                                    </table>

                                </div><br><br>
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
        </div>

    </div>

@stop
