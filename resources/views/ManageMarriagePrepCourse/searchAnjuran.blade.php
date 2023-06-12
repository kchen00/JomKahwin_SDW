@extends('ManageMarriagePrepCourse.base')
@section('ManageMarriagePrepCourse.searchAnjuran')

<div class="header">
  <div class="anjuran">
        <form action="/action_page.php">
          <label for="cars">Pilih Anjuran</label>
          <select name="cars" id="pejabat">
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
          <br><br>
          <input type="submit" value="Cari"><br>
        </form>
  </div>
        
  <div class = "table">

    <table border = '1px solid black'>
        <tr>
          <th>Nama Pasangan</th>
          <th>No.K/P Pengenalan</th>
          <th>No.Siri</th>
          <th>Tarikh Permohonan</th>
          <th>Status</th>
          <th>Operasi</th>
        </tr>

        <tr>
          <td>aa</td>
          <td>bb</td>
          <td>cc</td>
          <td>dd</td>
          <td>ee</td>
          <td>ff</td>
        </tr>
    </table>
  </div>

</div>


@stop