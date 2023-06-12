@extends('MarriageRegistration.base')
@section('MarriageRegistration.MarriageRegInfo')


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
    <p>BORANG AKUAN PERMAUSTATIN (SUAMI)</p>
<br>
<form id="myForm">
    <h2>Form Data</h2>
    <h3>Maklumat Wali</h3>
    <label for="namaWali">Nama Wali *</label>
    <input type="text" id="namaWali" required>
    <label for="icWali">Nombor Kad Pengenalan (1) *</label>
    <input type="text" id="icWali" required>
    <label for="umurWali">Umur (1) *</label>
    <input type="number" id="umurWali" required>
    <label for="alamatWali">Alamat (1) *</label>
    <textarea id="alamatWali" required></textarea>
  
    <hr>
  
    <h3>Maklumat Saksi (1)</h3>
    <label for="namaSaksi1">Nama Saksi (1) *</label>
    <input type="text" id="namaSaksi1" required>
    <label for="perhubunganSaksi1">Perhubungan (1) *</label>
    <input type="text" id="perhubunganSaksi1" required>
    <label for="icSaksi1">Nombor Kad Pengenalan (1) *</label>
    <input type="text" id="icSaksi1" required>
    <label for="umurSaksi1">Umur (1) *</label>
    <input type="number" id="umurSaksi1" required>
    <label for="alamatSaksi1">Alamat (1) *</label>
    <textarea id="alamatSaksi1" required></textarea>
  
    <hr>
  
    <h3>Maklumat Saksi (2)</h3>
    <label for="namaSaksi2">Nama Saksi (2) *</label>
    <input type="text" id="namaSaksi2" required>
    <label for="perhubunganSaksi2">Perhubungan (2) *</label>
    <input type="text" id="perhubunganSaksi2" required>
    <label for="icSaksi2">Nombor Kad Pengenalan (2) *</label>
    <input type="text" id="icSaksi2" required>
    <label for="umurSaksi2">Umur (2) *</label>
    <input type="number" id="umurSaksi2" required>
    <label for="alamatSaksi2">Alamat (2) *</label>
    <textarea id="alamatSaksi2" required></textarea>
  
    <hr>
  
    <h3>Maklumat Tambahan</h3>
    <label for="masKahwin">Mas Kahwin *</label>
    <input type="text" id="masKahwin" required>
    <label for="belanjaHartawan">Belanja Hartawan *</label>
    <input type="text" id="belanjaHartawan" required>
    <label for="pemberianLain">Pemberian Lain</label>
    <input type="text" id="pemberianLain">

    <hr>

    <label for="tempohMenetap">TEMPOH MENETAP DI PAHANG *</label>
    <input type="text" id="tempohMenetap" required>
  
    <hr>
  
    <button type="reset">Reset</button>
    <button type="submit"><a href="/Manage_Document" >Save & Continue</a></button>
  </form>
  
    
  </form>
  
  <script>
    // JavaScript code for handling form submission and reset
  
    // Function to handle form submission
    function handleSubmit(event) {
      event.preventDefault(); // Prevents the form from submitting and refreshing the page
  
      // Get form values
      var namaWali = document.getElementById('namaWali').value;
      var icWali = document.getElementById('icWali').value;
      // Get values for other form fields
  
      // Perform any necessary data validation or processing
  
      // Save the data to the database (you can add your database integration code here)
  
      // Redirect to the next page
      window.location.href ="/Partner_info";
    }
  
    // Function to handle form reset
    function handleReset(event) {
      // Reset form fields
      document.getElementById('myForm').reset();
    }
  
    // Add event listeners to the buttons
    var submitButton = document.querySelector('button[type="submit"]');
    var resetButton = document.querySelector('button[type="reset"]');
  
    submitButton.addEventListener('click', handleSubmit);
    resetButton.addEventListener('click', handleReset);
  </script>
      
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
