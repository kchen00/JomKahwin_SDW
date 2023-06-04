@extends('ManageMarriagePrepCourse.base')
@section('ManageMarriagePrepCourse.registerCourse')

<div class='header'>
    <h5>KURSUS PRA PERKAHWINAN>>Daftar Kursus Kahwin</h5>


<div class='register'>
    <form action="/action_page.php">      
        <label>No.Kad Pengenalan <font color="#FF0000"> *</font> : </label> 
        <input type="text" display:inline-block; text-align:right; style="width: 300px; height: 30px;"  > <br><br> 
        <label>Nama Pemohon <font color="#FF0000"> *</font> :</label>   
        <input type="text" display:inline-block; text-align:right; style="width: 300px; height: 30px;"  > <br><br>
        <label>Alamat Dalam K/P <font color="#FF0000"> *</font> :</label> 
        <input type="text" name="Alamat" display:inline-block; text-align:right; style="width:300px; height:30px"; > <br><br>
        <label>Negeri <font color="#FF0000"> *</font> :</label> 
          <select name="negeri" id="negeri">
            <option value="negeri">Negeri</option>
            <option value="johor">JOHOR</option>
            <option value="kedah">KEDAH</option>
            <option value="kelantan">KELANTAN</option>
            <option value="melaka">MELAKA</option>
            <option value="negeri sembilan">NEGERI SEMBILAN</option>
            <option value="pahang">PAHANG</option>
            <option value="perak">PERAK</option>
            <option value="perlis">PERLIS</option>
            <option value="pulau pinang">PULAU PINANG</option>
            <option value="sabah">SABAH</option>
            <option value="sarawak">SARAWAK</option>
            <option value="selangor">SELANGOR</option>
            <option value="terengganu">TERENGGANU</option>
            <option value="kl">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
            <option value="labuan">WILAYAH PERSEKUTUAN LABUAN</option>
            <option value="putrajaya">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
          </select><br><br>
        <label>Daerah <font color="#FF0000"> *</font> : </label> 
          <select name="daerah" id="daerah">
            <option value="negeri">Negeri</option>
            <option value="johor">JOHOR</option>
            <option value="kedah">KEDAH</option>
            <option value="kelantan">KELANTAN</option>
            <option value="melaka">MELAKA</option>
            <option value="negeri sembilan">NEGERI SEMBILAN</option>
            <option value="pahang">PAHANG</option>
            <option value="perak">PERAK</option>
            <option value="perlis">PERLIS</option>
            <option value="pulau pinang">PULAU PINANG</option>
            <option value="sabah">SABAH</option>
            <option value="sarawak">SARAWAK</option>
            <option value="selangor">SELANGOR</option>
            <option value="terengganu">TERENGGANU</option>
            <option value="kl">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
            <option value="labuan">WILAYAH PERSEKUTUAN LABUAN</option>
            <option value="putrajaya">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
          </select><br><br>
        <label>Pilih Sektor Pekerjaan <font color="#FF0000"> *</font> : </label>
          <select name="pekerjaan" id="pekerjaan">
            <option value="pekerjaan">Pilih Sektor Pekerjaan</option>
            <option value="bekerja sendiri">BEKERJA SENDIRI</option>
            <option value="pesara">PESARA</option>
            <option value="sektor awam">SEKTOR AWAM</option>
            <option value="sektor swasta">SEKTOR SWASTA</option>
            <option value="tidak bekerja">TIDAK BEKERJA</option>
          </select><br><br>
        <label>Tahap Pendidikan <font color="#FF0000"> *</font> : </label> 
          <select name="pendidikan" id="pendidikan">
            <option value="negeri">Pilih Pendidikan Tinggi</option>
            <option value="phd">PHD</option>
            <option value="master">MASTER</option>
            <option value="ijazah">IJAZAH</option>
            <option value="diploma">DIPLOMA</option>
            <option value="stpm">STPM</option>
            <option value="spm">SPM</option>
            <option value="pt3">PT3 / PMR</option>
            <option value="upsr">UPSR</option>
          </select><br><br>
        <label>Jantina <font color="#FF0000"> *</font> : </label> 
          <select name="jantina" id="jantina">
            <option value="negeri">Pilih Jantina</option>
            <option value="lelaki">Lelaki</option>
            <option value="perempuan">Perempuan</option>
          </select><br><br>
        <label>No. Telefon <font color="#FF0000"> *</font> : </label> 
        <input type="text" placeholder="(0109567891)" style="width: 300px; height: 30px;"  > <br><br> 
    <div class="row">	
        <div class="col-sm-6 form-group">
                  <label>Cadangan Tarikh Akad Nikah <font color="#FF0000"> *</font></label>
                   <input type="date"  id="txtTkhNikah" name="txtTkhNikah" class="form-control" required >
        </div><br><br>
        <label>Kebenaran Jabatan Agama Islam Negeri <font color="#FF0000"> *</font> :</label> 
          <select name="negeri" id="negeri">
            <option value="negeri">Negeri</option>
            <option value="johor">JOHOR</option>
            <option value="kedah">KEDAH</option>
            <option value="kelantan">KELANTAN</option>
            <option value="melaka">MELAKA</option>
            <option value="negeri sembilan">NEGERI SEMBILAN</option>
            <option value="pahang">PAHANG</option>
            <option value="perak">PERAK</option>
            <option value="perlis">PERLIS</option>
            <option value="pulau pinang">PULAU PINANG</option>
            <option value="sabah">SABAH</option>
            <option value="sarawak">SARAWAK</option>
            <option value="selangor">SELANGOR</option>
            <option value="terengganu">TERENGGANU</option>
            <option value="kl">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
            <option value="labuan">WILAYAH PERSEKUTUAN LABUAN</option>
            <option value="putrajaya">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
          </select><br><br>
        </div>
        <label>Slip Pembayaran <font color="#FF0000"> *</font> :</label> 
        <input type="text" display:inline-block; text-align:right; style="width: 300px; height: 30px;"> <br><br>      
      </form> 
    </div>

</div>
@stop


