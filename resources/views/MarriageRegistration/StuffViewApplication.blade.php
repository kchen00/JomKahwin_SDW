@extends('MarriageRegistration.baseA')
@section('MarriageRegistration.StuffViewApplication')

<style>

h1 {
  text-align: center;
}

.form-container {
  max-width: 600px;
  margin: 20px auto;
  padding: 20px;
  background-color: #f0f0f0;
  border-radius: 5px;
}

h2 {
  margin-top: 20px;
  margin-bottom: 10px;
}

h3, h4 {
  margin-top: 15px;
  margin-bottom: 5px;
}

label {
  display: block;
  margin-top: 10px;
}

input[type="text"] {
  width: 100%;
  padding: 5px;
  font-size: 16px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

input[type="text"]:focus {
  outline: none;
  border-color: #999;
}


.form-buttons {
      text-align: center;
      margin-top: 20px;
    }

    .form-buttons button {
      margin-right: 10px;
      padding: 10px 20px;
      background-color: #4caf50;
      border: none;
      color: white;
      cursor: pointer;
    }

    .button-approve {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 4px;
}

.button-approve:hover {
  background-color: #45a049;
}

.button-approve:active {
  background-color: #3e8e41;
}



</style>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <h1>PERMOHONAN DAFTAR PERKAHWIN</h1>

  <div class="form-container">
    <h2>BORANG AKUAN PERMAUSTATIN (SUAMI)</h2>
    <label>Nama Wali *</label>
    <input type="text" name="namaWali" value="Ahmad bin Ali" required>

    <label>Nombor Kad Pengenalan (1) *</label>
    <input type="text" name="noKadPengenalan1" value="800101-01-1234" required>

    <label>Umur (1) *</label>
    <input type="text" name="umur1" value="45" required>

    <label>Alamat (1) *</label>
    <input type="text" name="alamat1" value="Lot 123, Jalan Merdeka, 25000 Kuantan, Pahang" required>

    <hr>

    <label>Nama Saksi (1)</label>
    <input type="text" name="namaSaksi1" value="Mohd bin Hassan">

    <label>Perhubungan (1) *</label>
    <input type="text" name="perhubungan1" value="Sahabat" required>

    <label>Nombor Kad Pengenalan (1)</label>
    <input type="text" name="noKadPengenalan2" value="850202-02-5678">

    <label>Umur (1) *</label>
    <input type="text" name="umur2" value="40" required>

    <label>Alamat (1) *</label>
    <input type="text" name="alamat2" value="No. 50, Jalan Bahagia, 25050 Kuantan, Pahang" required>

    <hr>

    <label>Nama Saksi (2) *</label>
    <input type="text" name="namaSaksi2" value="Nurul binti Abdul Rahman" required>

    <label>Perhubungan (2)</label>
    <input type="text" name="perhubungan2" value="saudara">

    <label>Nombor Kad Pengenalan (2) *</label>
    <input type="text" name="noKadPengenalan3" value="880303-03-9012" required>

    <label>Umur (2) *</label>
    <input type="text" name="umur3" value=" 35" required>

    <label>Alamat (2) *</label>
    <input type="text" name="alamat3" value="Blok A, Pangsapuri Indah, 25100 Kuantan, Pahang" required>

    <hr>

    <label>Mas Kahwin *</label>
    <input type="text" name="masKahwin" value="RM2,000" required>

    <label>Belanja Hartawan *</label>
    <input type="text" name="belanjaHartawan" value="-" required>

    <label>Pemberian Lain</label>
    <input type="text" name="pemberianLain" value="Tiada">

    <label>TEMPOH MENETAP DI PAHANG *</label>
    <input type="text" name="tempohMenetap" value="10 tahun" required>

    <h2>Second Part</h2>
    <h3>MAKLUMAT SUAMI</h3>
    <label>No. Kad Pengenalan</label>
    <input type="text" name="noKadPengenalanSuami" value="020420-01-087632">

    <label>Nama Suami</label>
    <input type="text" name="namaSuami" value="ABDUL ALIM BIN ABDULAMIRUDIN">

    <label>Tarikh Lahir</label>
    <input type="text" name="tarikhLahirSuami" value="4 April 1981">

    <label>Umur</label>
    <input type="text" name="umurSuami" value="42">

    <label>Bangsa</label>
    <input type="text" name="bangsaSuami" value="Melayu">

    <label>Warganegara</label>
    <input type="text" name="warganegaraSuami" value="Malaysia">

    <label>Taraf Pendidikan</label>
    <input type="text" name="tarafPendidikanSuami" value="Ijazah Sarjana Muda">

    <label>Sektor Pekerjaan</label>
    <input type="text" name="sektorPekerjaanSuami" value="Swasta">

    <label>Nama Pekerjaan</label>
    <input type="text" name="namaPekerjaanSuami" value="Pengurus Projek">

    <label>Pendapatan</label>
    <input type="text" name="pendapatanSuami" value="RM6,000">

    <label>Alamat Dalam K/P</label>
    <input type="text" name="alamatKPSuami" value="No. 25, Jalan Mawar, Taman Bahagia, 25150 Kuantan, Pahang">

    <label>Alamat Semasa</label>
    <input type="text" name="alamatSemasaSuami" value=" No. 45, Jalan Melati, Taman Indah, 25150 Kuantan, Pahang">

    <label>No. Telefon</label>
    <input type="text" name="noTelefonSuami" value="0123456789">

    <label>Status Perkahwinan</label>
    <input type="text" name="statusPerkahwinanSuami" value="Berkahwin">

    <h3>MAKLUMAT ISTERI</h3>
    <label>No. Kad Pengenalan</label>
    <input type="text" name="noKadPengenalanIsteri" value="850505-05-3456">

    <label>Nama Isteri</label>
    <input type="text" name="namaIsteri" value="Siti binti Ahmad">

    <label>Tarikh Lahir</label>
    <input type="text" name="tarikhLahirIsteri" value="5 Mei 1985">

    <label>Umur</label>
    <input type="text" name="umurIsteri" value="38">

    <label>Bangsa</label>
    <input type="text" name="bangsaIsteri" value="Melayu">

    <label>Warganegara</label>
    <input type="text" name="warganegaraIsteri" value="Malaysia">

    <label>Taraf Pendidikan</label>
    <input type="text" name="tarafPendidikanIsteri" value="Diploma">

    <label>Sektor Pekerjaan</label>
    <input type="text" name="sektorPekerjaanIsteri" value="Swasta">

    <label>Nama Pekerjaan</label>
    <input type="text" name="namaPekerjaanIsteri" value="Eksekutif">

    <label>Pendapatan</label>
    <input type="text" name="pendapatanIsteri" value="RM4,500">

    <label>Alamat Dalam K/P</label>
    <input type="text" name="alamatKPIsteri" value="No. 30, Jalan Dahlia, Taman Murni, 25100 Kuantan, Pahang">

    <label>Alamat Semasa</label>
    <input type="text" name="alamatSemasaIsteri" value="No. 60, Jalan Anggerik, Taman Ceria, 25100 Kuantan, Pahang">

    <label>No. Telefon</label>
    <input type="text" name="noTelefonIsteri" value="0123456788">

    <label>Status Perkahwinan</label>
    <input type="text" name="statusPerkahwinanIsteri" value="Berkahwin">

    <h2>Tiered Part</h2>
    <h3>MAKLUMAT PERKAHWINAN</h3>
    <h4>BUTIRAN PERKAHWINAN</h4>
    <label>Tarikh Akad Nikah *</label>
    <input type="text" name="tarikhAkadNikah" value="15 July 2023" required>

    <label>Masa Akad Nikah *</label>
    <input type="text" name="masaAkadNikah" value="10:00 AM" required>

    <label>Tempat Akad Nikah</label>
    <input type="text" name="tempatAkadNikah" value="Masjid Al-Makmur, Kuantan, Pahang">

    <label>Jenis Mas Kahwin</label>
    <input type="text" name="jenisMasKahwin" value="Mas Kahwin Wang Tunai">

    <label>Mas Kahwin</label>
    <input type="text" name="masKahwin2" value="RM2,000">

    <label>Hantaran *</label>
    <input type="text" name="hantaran" value=" RM5,000" required>

    <label>Pemberian Lain</label>
    <input type="text" name="pemberianLain2" value="Tiada">

    <label>Nama Jurunikah *</label>
    <input type="text" name="namaJurunikah" value="Ustaz Ali Hassan" required>

    <hr>

    <h4>BUTIRAN WALI</h4>
    <label>Nama Wali *</label>
    <input type="text" name="namaWali2" value="Ahmad bin Ali" required>

    <label>No. Kad Pengenalan Wali *</label>
    <input type="text" name="noKadPengenalanWali" value="800101-01-1234" required>

    <label>Alamat Wali *</label>
    <input type="text" name="alamatWali" value="Lot 123, Jalan Merdeka, 25000 Kuantan, Pahang" required>

    <label>Tarikh Lahir Wali *</label>
    <input type="text" name="tarikhLahirWali" value="1 January 1980" required>

    <label>Umur Wali *</label>
    <input type="text" name="umurWali" value="43" required>

    <label>Hubungan</label>
    <input type="text" name="hubungan" value="Ayah">

    <hr>

    <h4>BUTIRAN SAKSI 1</h4>
    <label>Nama Saksi</label>
    <input type="text" name="namaSaksi" value="">

    <label>No. Kad Pengenalan Saksi *</label>
    <input type="text" name="noKadPengenalanSaksi" value="" required>

    <label>Umur Saksi *</label>
    <input type="text" name="umurSaksi" value="" required>

    <label>Alamat Saksi *</label>
    <input type="text" name="alamatSaksi" value="" required>

    <hr>

    <h4>BUTIRAN SAKSI 2</h4>
    <label>Nama Saksi *</label>
    <input type="text" name="namaSaksi2" value="Mohd bin Hassan" required>

    <label>No. Kad Pengenalan Saksi *</label>
    <input type="text" name="noKadPengenalanSaksi2" value="850202-02-5678" required>

    <label>Umur Saksi *</label>
    <input type="text" name="umurSaksi2" value="40" required>

    <label>Alamat Saksi</label>
    <input type="text" name="alamatSaksi2" value="No. 50, Jalan Bahagia, 25050 Kuantan, Pahang">
  </div>

  <a href="StuffApproval_Application">
  <button type="button" class="button-approve">CHECK PAYMENT</button>
    </a>
  





@stop