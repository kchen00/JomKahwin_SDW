@extends('ManageChangeConsultRequestView.Admin.base')
@section('ManageChangeConsultRequestView.Admin.ManageUserRequestView')


<div class="container-fluid">

    <div class="header">
        <h1 class="header-title">
            Urusan Khidmat Nasihat
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="manageConsultation">Urusan Khidmat Nasihat</a></li>
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

                <tr bgcolor="#FFFFFF" class="font12" height="30">
                <td colspan="7" align="center">Sila buat carian untuk mendapatkan senarai...</td>
                </tr>
        
			</table><br>
                        
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
    </script>


@stop