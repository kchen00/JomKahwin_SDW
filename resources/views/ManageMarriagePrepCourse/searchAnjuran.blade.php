@extends('ManageMarriagePrepCourse.base')
@section('ManageMarriagePrepCourse.searchAnjuran')

    <div class="header">
        <div class="anjuran card row">
            <form action="anjuran/search" method="GET">
                <label for="cars">Pilih Anjuran</label>
                <select id="pejabat">
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
                </select>
                <input type="submit"><br>
            </form>
        </div>

        <div class="table card row">

            <table style='boder: 1px solid black'>
                <tr>
                    <th>No.</th>
                    <th>Anjuran</th>
                    <th>Tempat</th>
                    <th>Tarikh</th>
                    <th>Kapasiti perserta</th>
                    <th>Kekosongan</th>
                    <th>Papar lanjut</th>
                    <th>Daftar</th>
                </tr>
                
                @for ($i=0; $i<count($results); $i++)
                  <tr>
                      <td>{{ $i+1 }}</td>
                      <td>PEJABAT AGAMA DAERAH</td>
                      <td>{{ $results[$i]->C_courseVenue }}</td>
                      <td>{{ $results[$i]->C_courseDateTime }}</td>
                      <td>{{ 300 }}</td>
                      <td>{{ 0 }}</td>
                      <td>Lanjut</td>
                      <td><a href="/marriage_course/register">Daftar</a></td>
                  </tr>
                @endfor
            </table>
        </div>

    </div>


@stop
