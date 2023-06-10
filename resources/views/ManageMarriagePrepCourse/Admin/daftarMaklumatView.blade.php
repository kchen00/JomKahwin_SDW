@extends('ManageMarriagePrepCourse.Admin.base')
@section('ManageMarriagePrepCourse.Admin.daftarMaklumatView')


<div class='header'>
    <h5>DAFTAR MAKLUMAT>>Daftar Tempat Kursus</h5>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4">PAID  <font color="#FF0000"> *</font> : </label>
                            <select name="cars" id="pejabat" class="form-control">
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
                            <input type="date" id="txtTkhMula"  class="form-control" required >
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="pegawai">Pegawai Dihubungi<font color="#FF0000"> *</font> : </label>
                            <input type="text" class="form-control" id="pegawai" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="tarikh">Tarikh Tamat <font color="#FF0000"> *</font> : </label>
                            <input type="date" id="txtTkhTamat"  class="form-control" required >
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="tempat">Tempat<font color="#FF0000"> *</font> : </label>
                            <input type="text" class="form-control" id="pegawai" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="masa">Masa Dari <font color="#FF0000"> *</font> : </label>
                            <input type="text" id="masa"  class="form-control" required >
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="kapasiti">Kapasiti<font color="#FF0000"> *</font> : </label>
                            <input type="text" class="form-control" id="kapasiti" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="masa">Masa Tamat<font color="#FF0000"> *</font> : </label>
                            <input type="text" id="masa"  class="form-control" required >
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="kapasiti">No. Telefon<font color="#FF0000"> *</font> : </label>
                            <input type="text" class="form-control" id="no" >
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="masa">Catatan<font color="#FF0000"> *</font> : </label>
                            <textarea class="form-control" placeholder=" " rows="4"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="kapasiti">Terbitan kepada umum<font color="#FF0000"> *</font> : </label>
                            <select name="terbitan" id="terbitan" class="form-control">
                                <option value="semua">Sila Pilih</option>
                                <option value="pahang">YA</option>
                                <option value="pahang">TIDAK</option>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 ms-sm-auto">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <span class="form-check-label">Ruangan yang bertanda (<font color="#FF0000"> *</font> ) adalah WAJIB diisi </span> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
@stop
