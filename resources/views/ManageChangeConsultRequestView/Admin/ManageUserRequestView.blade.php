@extends('ManageChangeConsultRequestView.Admin.base')
@section('ManageChangeConsultRequestView.Admin.ManageUserRequestView')


<div class="container-fluid">

    <div class="header">
        <h1 class="header-title">
            Urusan Khidmat Nasihat
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard-default.html">Urusan Khidmat Nasihat</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengesahan Tukar Sesi</li>
            </ol>
        </nav>
    </div>
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Senarai Permohonan Tukar Sesi</h5>
            </div>
            <div class="card-body">

            <div style="text-align: center; align-items: center; display: flex; justify-content: center;" >
                <table>
                    <tr>
                        <td>No. KP/Nama Pengadu</td> <br>
                        <td>No. KP Kene Adu</td> <br>
                        <td>No. Slip Permohonan</td> <br>   
                    </tr>
                    <tr>
                        <td><input type="text" id="searchICpengadu"></td> 
                        <td><input type="text" id="searchICkeneadu"></td>
                        <td><input type="text" id="searchNoSlip"></td>
                        
                        <td><button type="submit"class="btn btn-primary"onclick="search()">Cari</button></td>
                    </tr>
                </table>
            </div><br>

            <table bgcolor="#2F72B9" cellpadding="0" cellspacing="1" align="center" width="100%">
                
                <tr bgcolor="#CCCCCC" class="font14bold" height="25" align="center">
                <td width="3%">Bil</td>
                <td width="20%">No. KP/Nama Pengadu</td>
                <td width="20%">No. KP/Nama Pasangan/Nama Kene Adu</td>
                <td width="10%">No. Slip Permohonan</td>
                <td width="15%">Status</td>
                <td width="15%">Operasi</td>
                </tr>

                <tr bgcolor="#FFFFFF" class="font12" height="30" align="center">
                <!--<td colspan="7" align="center">Sila buat carian untuk mendapatkan senarai...</td>-->
                <td>1</td>
                <td>Abi bin Bakar</td>
                <td>Alia binti Ali</td>
                <td>KTN1M5/2023-000001</td>
                <td>BARU</td>
                <td>
                    <button class="icon-button icon-view" title="View" onclick="view()"></button>
                    <button class="icon-button icon-approval" title="Approval" onclick="showPopupBar()"></button>
                    <button class="icon-button icon-send-email" title="Send Email" onclick="sendEmail()"></button>
                </td>
                </tr>
        
			</table><br>

            <div id="popupBar" class="popup-bar">
                <span class="message">Kelulusan Permohonan</span>
                <button onclick="acceptChange()">Terima</button>
                <button onclick="denyChange()">Tolak</button>
            </div>
                        
            </div>
        </div>
    </div>
</div>


<script>
        function search() {
            var searchICpengadu = document.getElementById("searchICpengadu").value;
            var searchICkeneadu = document.getElementById("searchICkeneadu").value;
            var searchNoSlip = document.getElementById("searchNoSlip").value;
            
            // Perform search operations with the search values
            
            // Example: Outputting the search values to the console
            console.log("No. KP/Nama Pengadu: " + searchICpengadu);
            console.log("No. KP Kene Adu: " + searchICkeneadu);
            console.log("No. Slip Permohonan: " + searchNoSlip);
            
            // You can perform your search logic here
            // For example, send the search values to a server-side script via AJAX
            
            // Reset the search fields
            document.getElementById("searchICpengadu").value = "";
            document.getElementById("searchICkeneadu").value = "";
            document.getElementById("searchNoSlip").value = "";
        }

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

        function showPopupBar() {
            var popupBar = document.getElementById("popupBar");
            popupBar.style.display = "block";
        }
    
        function acceptChange() {
            alert("Permohonan Diluluskan!");
            hidePopupBar();
            window.location.href = "updateChange";
        }
    
        function denyChange() {
            alert("Permohonan Ditolak!");
            hidePopupBar();
        }
    
        function hidePopupBar() {
            var popupBar = document.getElementById("popupBar");
            popupBar.style.display = "none";
        }

        function sendEmail() {
            alert("Pengesahan Permohonan Telah Dihantar Kepada Email Pemohon.");
        }

        function view() {
            window.location.href = "applyApplication";
        }
    </script>


@stop