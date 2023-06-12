@extends('MarriageRegistration.base')
@section('MarriageRegistration.MarriageInfoCopy')
<style>

.content {
        margin-left: 0;
      }
      label {
    font-weight: bold;
  }
  

  p {
    margin: 5px 0;
  }

  #id-output {
    color: blue;
  }

  #name-output {
    color: green;
  }

  .search {
    margin-bottom: 20px;
  }

  input[type="text"] {
    padding: 5px;
    font-size: 14px;
    border: 1px solid #ccc;
  }

  button {
    padding: 5px 10px;
    font-size: 14px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    border: 2px solid black;
  }

  table th,
  table td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    border: 2px solid black;
  }

  table th {
    background-color: #f2f2f2;
    border: 2px solid black;
  }

        .output {
    margin-top: 20px;
    font-family: Arial, sans-serif;
    color: #333;
  }
  .button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #536dbc;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .button:hover {
    background-color: #2e2b70;
  }

  
   /* Styling for the form */
 form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f4f6f9;
    border-radius: 5px;
    font-family: Arial, sans-serif;
  }

  h2, h3 {
    text-align: center;
  }

  label {
    display: block;
    margin-top: 10px;
  }

  input[type="text"],
  input[type="date"],
  input[type="number"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 5px;
    margin-bottom: 15px;
  }

  /* Styling for the buttons */
  button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
  }

  button[type="reset"] {
    background-color: #f44336;
  }

  /* Additional styling for the form */
  hr {
    border: none;
    height: 1px;
    background-color: #ccc;
    margin-top: 20px;
    margin-bottom: 20px;
  }


</style>

<br>
<br>
<br>
<br>
<br>
<br>

  <div class="content">
    <h2>PERMOHONAN DAFTA PERKAHWINAN</h2>
    <p>MAKLUMAT PERKAHWINAN</p>
  <form action="save_data.php" method="post">
    <h2>BUTIRAN PERKAHWINAN</h2>
    <div class="form-section">
      <label for="tarikhAkadNikah">Tarikh Akad Nikah*</label>
      <input type="date" id="tarikhAkadNikah" name="tarikhAkadNikah" required>

      <label for="masaAkadNikah">Masa Akad Nikah*</label>
      <input type="text" id="masaAkadNikah" name="masaAkadNikah" required>

      <label for="tempatAkadNikah">Tempat Akad Nikah</label>
      <input type="text" id="tempatAkadNikah" name="tempatAkadNikah">

      <label for="jenisMasKahwin">Jenis Mas Kahwin</label>
      <input type="text" id="jenisMasKahwin" name="jenisMasKahwin">

      <label for="masKahwin">Mas Kahwin</label>
      <input type="text" id="masKahwin" name="masKahwin">

      <label for="hantaran">Hantaran*</label>
      <input type="text" id="hantaran" name="hantaran" required>

      <label for="pemberianLain">Pemberian Lain</label>
      <input type="text" id="pemberianLain" name="pemberianLain">

      <label for="namaJurunikah">Nama Jurunikah*</label>
      <input type="text" id="namaJurunikah" name="namaJurunikah" required>
    </div>

    <h2>BUTIRAN WALI</h2>
    <div class="form-section">
      <label for="namaWali">Nama Wali*</label>
      <input type="text" id="namaWali" name="namaWali" required>

      <label for="noKadPengenalanWali">No. Kad Pengenalan Wali*</label>
      <input type="text" id="noKadPengenalanWali" name="noKadPengenalanWali" required>

      <label for="alamatWali">Alamat Wali*</label>
      <textarea id="alamatWali" name="alamatWali" required></textarea>

      <label for="tarikhLahirWali">Tarikh Lahir Wali*</label>
      <input type="date" id="tarikhLahirWali" name="tarikhLahirWali" required>

      <label for="umurWali">Umur Wali*</label>
      <input type="number" id="umurWali" name="umurWali" required>

      <label for="hubungan">Hubungan</label>
      <input type="text" id="hubungan" name="hubungan">
    </div>

    <h2>BUTIRAN SAKSI 1</h2>
    <div class="form-section">
      <label for="namaSaksi1">Nama Saksi</label>
      <input type="text" id="namaSaksi1" name="namaSaksi1">

      <label for="noKadPengenalanSaksi1">No. Kad Pengenalan Saksi*</label>
      <input type="text" id="noKadPengenalanSaksi1" name="noKadPengenalanSaksi1" required>

      <label for="umurSaksi1">Umur Saksi*</label>
      <input type="number" id="umurSaksi1" name="umurSaksi1" required>

      <label for="alamatSaksi1">Alamat Saksi*</label>
      <textarea id="alamatSaksi1" name="alamatSaksi1" required></textarea>
    </div>

    <h2>BUTIRAN SAKSI 2</h2>
    <div class="form-section">
      <label for="namaSaksi2">Nama Saksi*</label>
      <input type="text" id="namaSaksi2" name="namaSaksi2" required>

      <label for="noKadPengenalanSaksi2">No. Kad Pengenalan Saksi*</label>
      <input type="text" id="noKadPengenalanSaksi2" name="noKadPengenalanSaksi2" required>

      <label for="umurSaksi2">Umur Saksi*</label>
      <input type="number" id="umurSaksi2" name="umurSaksi2" required>

      <label for="alamatSaksi2">Alamat Saksi</label>
      <textarea id="alamatSaksi2" name="alamatSaksi2"></textarea>
    </div>

    <div class="form-buttons">
      <button type="reset">Reset</button>
      <button type="submit"><a href="/Manage_Document" >Save & Continue</a></button>
    </div>
  </form>
    
    <br>
    
      
  </div>






  
  







  <script>
    // Toggle vertical navigation
    function toggleNav() {
      var nav = document.getElementById('verticalNav');
      nav.classList.toggle('hide-nav');
    }

    // Update current time
    function updateTime() {
      var currentTime = new Date();
      var hours = currentTime.getHours();
      var minutes = currentTime.getMinutes();
      var ampm = hours >= 12 ? 'PM' : 'AM';

      hours = hours % 12;
      hours = hours ? hours : 12; // Handle midnight
      minutes = minutes < 10 ? '0' + minutes : minutes;

      var timeString = hours + ':' + minutes + ' ' + ampm;

      document.getElementById('current-time').textContent = timeString;
    }

    // Update current date
    function updateDate() {
      var currentDate = new Date();
      var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
      var dateString = currentDate.toLocaleDateString(undefined, options);

      document.getElementById('current-date').textContent = dateString;
    }

    // Update time and date every second
    setInterval(updateTime, 1000);
    setInterval(updateDate, 1000);

   

  </script>
@stop
