
@extends('MarriageRegistration.baseA')
@section('MarriageRegistration.StuffSearchApplication')
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

</style>

<br>
<br>
<br>
<br>
<br>
<br>
  <div class="content">
    <h2>PERMOHONAN DAFTA PERKAHWINAN</h2>
    <div class="search">
        <label for="kp-input">Search K/P:</label>
        <input type="text" id="kp-input" placeholder="Enter K/P">
        <button id="search-button">Search</button>
      </div>
      
      <table>
        <thead>
          <tr>
            <th>K/P</th>
            <th>Name</th>
            <th>No. Slip</th>
            <th>Date</th>
            <th>Status</th>
            <th>Operasi</th>
          </tr>
          <tr>
            <th>020420-01-087632</th>
            <th>ABDUL ALIM BIN ABDULAMIRUDIN</th>
            <th>DN3/2023-087632</th>
            <th>13-06-2023</th>
            <th>DISAHKAN</th>
            <th><a href="/StuffView_Application">View</a></th>

          </tr>
        </thead>
        <tbody id="results-body">
          <!-- Results will be inserted here -->
        </tbody>
      </table>
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
