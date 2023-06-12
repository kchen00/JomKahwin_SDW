@extends('MarriageRegistration.base')
@section('MarriageRegistration.PartnerInfo')


<style>
    /* Content Styles */
    .content {
      margin-left: 240px;
      padding: 40px;
    }

    h2 {
      color: #333;
      margin-bottom: 20px;
    }

    p {
      color: #666;
      line-height: 1.6;
    }

    /* Responsive Styles */
    @media screen and (max-width: 768px) {
      .vertical-nav {
        width: 0;
      }

      .toggle-button {
        right: 20px;
      }

      .content {
        margin-left: 0;
      }
      label {
    font-weight: bold;
  }
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




  <div class="content">
    <h2>PERMOHONAN DAFTA PERKAHWINAN</h2>

<br>
<form action="save_data.php" method="POST">
    <h2>MAKLUMAT SUAMI</h2>
    <div class="form-section">
      <label for="suamiNoKad">No. Kad Pengenalan*</label>
      <input type="text" id="suamiNoKad" name="suamiNoKad" required>

      <label for="suamiNama">Nama Suami*</label>
      <input type="text" id="suamiNama" name="suamiNama" required>

      <label for="suamiTarikhLahir">Tarikh Lahir*</label>
      <input type="date" id="suamiTarikhLahir" name="suamiTarikhLahir" required>

      <label for="suamiUmur">Umur*</label>
      <input type="number" id="suamiUmur" name="suamiUmur" required>

      <label for="suamiBangsa">Bangsa*</label>
      <input type="text" id="suamiBangsa" name="suamiBangsa" required>

      <label for="suamiWarganegara">Warganegara*</label>
      <input type="text" id="suamiWarganegara" name="suamiWarganegara" required>

      <label for="suamiTarafPendidikan">Taraf Pendidikan*</label>
      <input type="text" id="suamiTarafPendidikan" name="suamiTarafPendidikan" required>

      <label for="suamiSektorPekerjaan">Sektor Pekerjaan*</label>
      <input type="text" id="suamiSektorPekerjaan" name="suamiSektorPekerjaan" required>

      <label for="suamiNamaPekerjaan">Nama Pekerjaan*</label>
      <input type="text" id="suamiNamaPekerjaan" name="suamiNamaPekerjaan" required>

      <label for="suamiPendapatan">Pendapatan*</label>
      <input type="text" id="suamiPendapatan" name="suamiPendapatan" required>

      <label for="suamiAlamatDalamKP">Alamat Dalam K/P*</label>
      <textarea id="suamiAlamatDalamKP" name="suamiAlamatDalamKP" required></textarea>

      <label for="suamiAlamatSemasa">Alamat Semasa*</label>
      <textarea id="suamiAlamatSemasa" name="suamiAlamatSemasa" required></textarea>

      <label for="suamiNoTelefon">No. Telefon</label>
      <input type="tel" id="suamiNoTelefon" name="suamiNoTelefon">

      <label for="suamiStatusPerkahwinan">Status Perkahwinan*</label>
      <input type="text" id="suamiStatusPerkahwinan" name="suamiStatusPerkahwinan" required>
    </div>
<hr>
    <h2>MAKLUMAT ISTERI</h2>
    <div class="form-section">
      <label for="isteriNoKad">No. Kad Pengenalan*</label>
      <input type="text" id="isteriNoKad" name="isteriNoKad" required>

      <label for="isteriNama">Nama Isteri*</label>
      <input type="text" id="isteriNama" name="isteriNama" required>

      <label for="isteriTarikhLahir">Tarikh Lahir*</label>
      <input type="date" id="isteriTarikhLahir" name="isteriTarikhLahir" required>

      <label for="isteriUmur">Umur*</label>
      <input type="number" id="isteriUmur" name="isteriUmur" required>

      <label for="isteriBangsa">Bangsa*</label>
      <input type="text" id="isteriBangsa" name="isteriBangsa" required>

      <label for="isteriWarganegara">Warganegara*</label>
      <input type="text" id="isteriWarganegara" name="isteriWarganegara" required>

      <label for="isteriTarafPendidikan">Taraf Pendidikan*</label>
      <input type="text" id="isteriTarafPendidikan" name="isteriTarafPendidikan" required>

      <label for="isteriSektorPekerjaan">Sektor Pekerjaan*</label>
      <input type="text" id="isteriSektorPekerjaan" name="isteriSektorPekerjaan" required>

      <label for="isteriNamaPekerjaan">Nama Pekerjaan*</label>
      <input type="text" id="isteriNamaPekerjaan" name="isteriNamaPekerjaan" required>

      <label for="isteriPendapatan">Pendapatan*</label>
      <input type="text" id="isteriPendapatan" name="isteriPendapatan" required>

      <label for="isteriAlamatDalamKP">Alamat Dalam K/P*</label>
      <textarea id="isteriAlamatDalamKP" name="isteriAlamatDalamKP" required></textarea>

      <label for="isteriAlamatSemasa">Alamat Semasa*</label>
      <textarea id="isteriAlamatSemasa" name="isteriAlamatSemasa" required></textarea>

      <label for="isteriNoTelefon">No. Telefon</label>
      <input type="tel" id="isteriNoTelefon" name="isteriNoTelefon">

      <label for="isteriStatusPerkahwinan">Status Perkahwinan*</label>
      <input type="text" id="isteriStatusPerkahwinan" name="isteriStatusPerkahwinan" required>
    </div>

    <div class="form-buttons">
      <button type="reset">Reset</button>
      <button type="submit"><a href="/marriage_info" >Save & Continue</a></button>
    </div>
  </form>
      
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

    document.getElementById('search-button').addEventListener('click', function() {
  var kp = document.getElementById('kp-input').value;
  searchDatabase(kp);
});

function searchDatabase(kp) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      var results = JSON.parse(this.responseText);
      displayResults(results);
    }
  };
  xmlhttp.open('GET', 'search.php?kp=' + kp, true); // Replace with the actual server-side script URL
  xmlhttp.send();
}

function displayResults(results) {
  var tbody = document.getElementById('results-body');
  tbody.innerHTML = '';

  if (results.length > 0) {
    for (var i = 0; i < results.length; i++) {
      var row = tbody.insertRow(i);
      row.insertCell(0).innerHTML = results[i].kp;
      row.insertCell(1).innerHTML = results[i].name;
      row.insertCell(2).innerHTML = results[i].slip;
      row.insertCell(3).innerHTML = results[i].date;
      row.insertCell(4).innerHTML = results[i].status;
    }
  } else {
    var row = tbody.insertRow(0);
    row.insertCell(0).colSpan = 5;
    row.insertCell(0).innerHTML = 'No results found.';
  }
}

  </script>
@stop