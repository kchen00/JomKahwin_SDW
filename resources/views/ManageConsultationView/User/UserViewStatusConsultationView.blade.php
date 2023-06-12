@extends('ManageConsultationView.User.base')
@section('ManageConsultationView.User.UserViewStatusConsultationView')


<div class="header">
    <h1 class="header-title">
        Khidmat Nasihat
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Khidmat Nasihat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rekod Permohonan</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Rekod Permohonan</h5>
            </div>
            <div class="card-body">
            <table bgcolor="#2F72B9" cellpadding="0" cellspacing="1" align="center" width="100%">
                
                <tr bgcolor="#CCCCCC" class="font14bold" height="25" align="center">
                <td width="5%">Bil</td>
                <td width="25%">No. KP/Nama Pengadu</td>
                <td width="23%">No. KP/Nama Pasangan/Nama Kene Adu</td>
                <td width="15%">Tarikh Aduan</td>
                <td width="17%">Status</td>
                <td width="15%">Operasi</td>
                </tr>

                <tr bgcolor="#FFFFFF" class="font12" height="30" align="center">
                <td>1</td>
                <td>Abi bin Bakar</td>
                <td>Alia binti Ali</td>
                <td>14/01/2023</td>
                <td>BARU</td>
                <td>
                    <button class="icon-button icon-view" title="View" onclick=""></button>
                    <button class="icon-button icon-approval" title="Approval" onclick="confirmApproval()"></button>
                    <button class="icon-button icon-send-email" title="Send Email" onclick="sendEmail()"></button>
                    <button class="icon-button icon-print" title="Print" onclick="printApplication()"></button>
                    <button class="icon-button icon-delete" title="Delete" onclick="deleteApplication()"></button>
                    <button class="icon-button icon-update" title="Update" onclick="updateApplication()"></button>
                </td>
                </tr>

                
        
			</table><br>
            
            <div class="card-body" style="text-align: center;">
            <p style="color:#192D95;"><b><i>Nota: Sila klik Sesi Khidmat Nasihat untuk maklumat sesi khidmat nasihat anda</i></b></p>   
            <p style="color:#192D95;"><b>Sila klik ‘Daftar Baru’ jika ingin membuat aduan / khidmat nasihat bagi pasangan 012345011234</b></p>   

            <div style="text-align: center;">
                    <a href="applyConsultation" class="btn btn-primary">Daftar Baru</a>
            </div>

            
            </div>
                        
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables basic
        $('#datatables-basic').DataTable({
            responsive: true
        });
        // Datatables with Buttons
        var datatablesButtons = $('#datatables-buttons').DataTable({
            lengthChange: !1,
            buttons: ["copy", "print"],
            responsive: true
        });
        datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
    });

    function confirmApproval() {
      var confirmation = confirm("Do you want to approve this application?");
      if (confirmation) {
        acceptChange();
      } else {
        denyChange();
      }
    }
    
    function acceptChange() {
      // Logic for accepting the change goes here
      alert("Permohonan Diterima!");
    }
    
    function denyChange() {
      // Logic for denying the change goes here
      alert("Permohonan Ditolak!");
    }

    function sendEmail() {
      alert("Application sent to applicant's email");
    }
    
    function printApplication() {
      alert("Printing the application");
    }
    
    function deleteApplication() {
      alert("Deleting the application");
    }
    
    function updateApplication() {
      alert("Updating the application");
    }

</script>

@stop