@extends('ManageMarriagePrepCourseView.User.base')
@section('ManageMarriagePrepCourseView.User.searchAnjuranView')

<div class='header'>
  <h5>Search IC</h5>

  <div class="col-5 col-xl-12">
      <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
              <form>
                  <div class="mb-3 row">
                      <label class="col-form-label col-sm-2 text-sm-end">Pilih Anjuran</label>
                      <form action="/action_page.php">
                        
                        <select name="cars" id="pejabat" class="form-control">
                          <option value="semua">SEMUA PEJABAT AGAMA DAERAH</option>
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
                        </select><br>
                      <div class="col-sm-3">
                          <div class="input-group">
                              
                              &nbsp;&nbsp;<button type="submit" class="btn btn-primary">Cari</button>
                          </div>
                      </div>
                    
                  </div>

                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th style="width:40%;">NO</th>
                              <th style="width:25%">ANJURAN</th>
                              <th style="width:25%">TEMPAT</th>
                              <th style="width:25%">TARIKH</th>
                              <th style="width:40%;">KAPASITI PESERTA</th>
                              <th style="width:40%;">KEKOSONGAN</th>
                              <th style="width:40%;">PAPAR LANJUT</th>
                              <th style="width:40%;">DAFTAR</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class="table-action">
                                  <a href="#"><i class="align-middle fas fa-fw fa-search"></i></i></a>
                              </td>
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

