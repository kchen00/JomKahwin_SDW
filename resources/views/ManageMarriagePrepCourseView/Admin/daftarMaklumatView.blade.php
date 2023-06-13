@extends('ManageMarriagePrepCourseView.Admin.base')
@section('ManageMarriagePrepCourseView.Admin.daftarMaklumatView')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">DAFTAR MAKLUMAT>>Daftar Tempat Kursus</h5>

            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4">PAID <font color="#FF0000"> *</font> :</label>
                            <select name="paid" id="pejabat" class="form-control">
                                <option value="semua">PEJABAT AGAMA ISLAM PEKAN</option>
                                <option value="pahang">JABATAN AGAMA ISLAM NEGERI PAHANG</option>
                                <option value="bentong">JABATAN AGAMA ISLAM BENTONG</option>
                                <option value="bera">JABATAN AGAMA ISLAM BERA</option>
                                <option value="cameron">JABATAN AGAMA ISLAM CAMERON HIGHLANDS</option>
                                <option value="chenor">JABATAN AGAMA ISLAM CHENOR</option>
                                <option value="jengka">JABATAN AGAMA ISLAM JENGKA</option>
                                <option value="jerantut">JABATAN AGAMA ISLAM JERANTUT</option>
                                <option value="kuantan">JABATAN AGAMA ISLAM KUANTAN</option>
                                <option value="lipis">JABATAN AGAMA ISLAM LIPIS</option>
                                <option value="maran">JABATAN AGAMA ISLAM MARAN</option>
                                <option value="muadzam">JABATAN AGAMA ISLAM MUADZAM SHAH</option>
                                <option value="pekan">JABATAN AGAMA ISLAM PEKAN</option>
                                <option value="raub">JABATAN AGAMA ISLAM RAUB</option>
                                <option value="rompin">JABATAN AGAMA ISLAM ROMPIN</option>
                                <option value="temerloh">JABATAN AGAMA ISLAM TEMERLOH</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="tarikh">Tarikh Mula <font color="#FF0000"> *</font> : </label>
                            <input type="date" id="txtTkhMula" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="pegawai">Pegawai Dihubungi<font color="#FF0000"> *</font> : </label>
                            <input type="text" class="form-control" id="pegawai">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="tarikh">Tarikh Tamat <font color="#FF0000"> *</font> : </label>
                            <input type="date" id="txtTkhTamat" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="tempat">Tempat<font color="#FF0000"> *</font> : </label>
                            <input type="text" class="form-control" id="pegawai">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="masa">Masa Dari <font color="#FF0000"> *</font> : </label>
                            <input type="text" id="masa" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="kapasiti">Kapasiti<font color="#FF0000"> *</font> : </label>
                            <input type="text" class="form-control" id="kapasiti">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="masa">Masa Tamat<font color="#FF0000"> *</font> : </label>
                            <input type="text" id="masa" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="kapasiti">No. Telefon<font color="#FF0000"> *</font> : </label>
                            <input type="text" class="form-control" id="no">
                        </div>

                        <div class="mb-3 col-md-6">
                                <label for="masa">Catatan<font color="#FF0000"> *</font> : </label>
                                <textarea class="form-control" placeholder=" " rows="4"></textarea>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 ms-sm-auto" style="display: flex; justify-content: center; align-items: center;"">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <span class="form-check-label">Ruangan yang bertanda (<font color="#FF0000"> *</font> )
                                adalah WAJIB diisi </span>
                        </div>
                    </div><br><br>

                    <table class="table table-bordered" text="right">
                        <thead>
                            <tr>
                                <th style="width:10%;">Bil</th>
                                <th style="width:40%;">PAID</th>
                                <th style="width:30%;">No.Siri</th>
                                <th style="width:30%">Tempat</th>
                                <th style="width:30%">Tarikh</th>
                                <th style="width:40%">Kapasiti</th>
                                <th style="width:45%">Papar Umum</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PEJABAT AGAMA ISLAM KUANTAN</td>
                                <td>DN3/2023-087632</td>
                                <td>DEWAN SRI SENTOSA</td>
                                <td>15/01/2023 hingga 16/01/2023</td>
                                <td>500</td>
                                <td>YA</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle fas fa-fw fa-edit"></i></i></a>
                                    <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>PEJABAT AGAMA ISLAM KUANTAN</td>
                                <td>DN3/2023-087986</td>
                                <td>DEWAN AS SAKINAH</td>
                                <td>27/01/2023 hingga 28/01/2023</td>
                                <td>300</td>
                                <td>YA</td>
                                <td class="table-action">
                                    <a href="#"><i class="align-middle fas fa-fw fa-edit"></i></i></a>
                                    <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table><br><br><br>


                    <div class="col-sm-17 ms-sm-auto"
                        style="display: flex; justify-content: center; align-items: center;">
                        <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                        <a href="tempat" class= "btn btn-primary mr-6 ">Seterusnya</button>&nbsp;&nbsp;</a>
                        {{-- <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp; --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop






 
