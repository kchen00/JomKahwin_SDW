@extends('ManageMarriagePrepCourse.base')
@section('ManageMarriagePrepCourseView.searchAnjuranView')

<div class='header'>
  <h5>Search IC</h5>

  <div class="col-5 col-xl-12">
      <div class="card">
          <div class="card-header">

          </div>
          <div class="card-body">
              <form>
                  <div class="mb-2 row">
                      <label class="col-form-label col-sm-2 text-sm-end">Pilih Anjuran</label>
                      <form action="/action_page.php">
                        
                        <select name="anjuran" id="pejabat" class="form-control">
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
                              <td>1</td>
                              <td>JABATAN AGAMA ISLAM AGAMA PEKAN</td>
                              <td>DEWAN SRI SENTOSA</td>
                              <td>15 JAN 2023</td>
                              <td>500</td>
                              <td>30</td>
                              <td class="table-action">
                                  <a href="#"><i class="align-middle fas fa-fw fa-search"></i></i></a>
                              </td>
                              <td class="table-action">
                                <a href="#"><i class="align-middle fas fa-fw fa-edit"></i></i></a>
                            </td>
                          </tr>

                          <td>2</td>
                          <td>JABATAN AGAMA ISLAM KUANTAN</td>
                          <td>DEWAN CEMPAKA</td>
                          <td>15 FEB 2023</td>
                          <td>300</td>
                          <td>PENUH <font color="#FF0000"></font></td>
                          <td class="table-action">
                              <a href="#"><i class="align-middle fas fa-fw fa-search"></i></i></a>
                          </td>
                          <td class="table-action">
                            <a href="#"><i class="align-middle fas fa-fw fa-edit"></i></i></a>
                        </td>
                      </tr>

                      </tbody>
                  </table>

                  <div class="col-sm-17 ms-sm-auto" style="display: flex; justify-content: center; align-items: center;">
                    <a href="mainPage" class= "btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;</a>
                    <a href="/marriage_course/register" class= "btn btn-primary mr-6 ">Seterusnya</button>&nbsp;&nbsp;</a>
                   
                    {{-- <a href="{{ route('kehadiran') }}" class="btn btn-primary">Seterusnya</a> --}}
                    {{-- <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp;  --}}
                </div>
          </div>
      </div>
      </form>
  </div>
</div>

@stop