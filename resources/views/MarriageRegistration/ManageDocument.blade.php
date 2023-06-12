@extends('MarriageRegistration.base')
@section('MarriageRegistration.ManageDocument')


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
      border: none;
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
    <p>DOKUMEN SOKONGAN</p>
    <form id="document-form" action="save_data.php" method="POST" enctype="multipart/form-data">
        <div class="form-section">
          <label for="akuan-sumpah">Akuan Sumpah *</label>
          <div class="file-input">
            <input type="file" id="akuan-sumpah" name="akuan-sumpah" required>
            <div class="file-buttons">
              <button class="view-button" type="button">View</button>
              <button class="delete-button" type="button">Delete</button>
            </div>
          </div>
        </div>
        <div class="form-section">
          <label for="borang-permaustatin-suami">Borang Akuan Permaustatin (Suami)*</label>
          <div class="file-input">
            <input type="file" id="borang-permaustatin-suami" name="borang-permaustatin-suami" required>
            <div class="file-buttons">
              <button class="view-button" type="button">View</button>
              <button class="delete-button" type="button">Delete</button>
            </div>
          </div>
        </div>
        <div class="form-section">
          <label for="borang-permaustatin-isteri">Borang Akuan Permaustatin (Isteri)*</label>
          <div class="file-input">
            <input type="file" id="borang-permaustatin-isteri" name="borang-permaustatin-isteri" required>
            <div class="file-buttons">
              <button class="view-button" type="button">View</button>
              <button class="delete-button" type="button">Delete</button>
            </div>
          </div>
        </div>
        <div class="form-section">
          <label for="borang-hiv-suami">Borang Keputusan HIV (Suami) *</label>
          <div class="file-input">
            <input type="file" id="borang-hiv-suami" name="borang-hiv-suami" required>
            <div class="file-buttons">
              <button class="view-button" type="button">View</button>
              <button class="delete-button" type="button">Delete</button>
            </div>
          </div>
        </div>
        <div class="form-section">
          <label for="borang-hiv-isteri">Borang Keputusan HIV (Isteri) *</label>
          <div class="file-input">
            <input type="file" id="borang-hiv-isteri" name="borang-hiv-isteri" required>
            <div class="file-buttons">
              <button class="view-button" type="button">View</button>
              <button class="delete-button" type="button">Delete</button>
            </div>
          </div>
        </div>
        <div class="form-buttons">
          <button type="reset">Reset</button>
          <button type="submit" id="save-button" disabled><a href="/Manage_PaymentInfoCopy" >Save & Continue</a></button>
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
  
  </script>
@stop
