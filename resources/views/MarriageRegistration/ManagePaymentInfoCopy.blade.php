@extends('MarriageRegistration.base')
@section('MarriageRegistration.ManagePaymentInfoCopy')


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
    color: #a6a4c4;
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
    background-color: #93b5bb;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .form-section {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .file-input {
      display: flex;
      align-items: center;
    }

    .file-buttons {
      margin-left: 10px;
    }

    .file-buttons button {
      background: none;
      border: black;
      cursor: pointer;
      margin-right: 5px;
    }

    .file-buttons button::before {
      content: "";
    }

    .delete-button::before {
      content: "Delete";
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

    .form-buttons button:disabled {
      background-color: #ccc;
      cursor: not-allowed;
    }


</style>









<br>
<br>
<br>

  <div class="content">
    <h2>PERMOHONAN DAFTA PERKAHWINAN</h2>
    <div class="form-section">
      <h3>HANTAR BAYARAN KE AKAUN BERIKUT :</h3>
      <table>
        <tr>
          <td>No. Akaun:</td>
          <td><input type="text" id="no-akaun" name="no-akaun" value="092321313212" required></td>
        </tr>
        <tr>
          <td>Nama Akaun:</td>
          <td><input type="text" id="nama-akaun" name="nama-akaun" value="JABATAN AGAMA ISLAM PAHANG" required></td>
        </tr>
        <tr>
          <td>Nama Bank:</td>
          <td><input type="text" id="nama-bank" name="nama-bank" value="Bank Islam" required></td>
        </tr>
      </table>
    </div>
    
    <div class="form-section">
      <h3>BUKTI PEMBAYARAN*</h3>
      
      <div class="file-input">
        <input type="file" id="borang-hiv-isteri" name="borang-hiv-isteri" required>
        <div class="file-buttons">
          <button class="view-button" type="button">View</button>
          <button class="delete-button" type="button">Delete</button>
        </div>
      </div>
    </div>
    <div class="form-buttons">
    <a href="/search_card" class="button">Save and Submit</a>

    <br>
    </div>
    
    

<br>
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



  const fileInputs = document.querySelectorAll('input[type="file"]');
    const saveButton = document.getElementById('save-button');

    fileInputs.forEach((input) => {
      const viewButton = input.nextElementSibling.querySelector('.view-button');
      const deleteButton = input.nextElementSibling.querySelector('.delete-button');

      viewButton.addEventListener('click', () => {
        const file = input.files[0];
        if (file) {
          const url = URL.createObjectURL(file);
          window.open(url, '_blank');
        }
      });

      deleteButton.addEventListener('click', () => {
        input.value = '';
        saveButton.disabled = !isAllInputsFilled();
      });

      input.addEventListener('change', () => {
        saveButton.disabled = !isAllInputsFilled();
      });
    });

    function isAllInputsFilled() {
      const requiredInputs = Array.from(fileInputs).filter((input) => input.hasAttribute('required'));
      return requiredInputs.every((input) => input.value !== '');
    }
  

}

  </script>
@stop
