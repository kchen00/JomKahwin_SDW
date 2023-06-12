@extends('MarriageRegistration.baseA')
@section('MarriageRegistration.StuffApprovalApplication')

<style>

textarea[name="ulasanPermohonan"] {
  width: 100%;
  height: 150px;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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

</style>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2>PERMOHONAN DAFTA PERKAHWINAN</h2>
<textarea rows="5" cols="50">
BUKTI PEMBAYARAN

Date: June 4, 2023
Payment Amount: RM5000.00
Payment Method: Islam Bank
Transaction ID: 1234567890
Recipient: Mohamad bin Ibrahim

Thank you for your payment!
</textarea>

<br>
<br>
<label>ULASAN PERMOHONAN (IKA ADA)</label>
<textarea name="ulasanPermohonan" rows="5" cols="50"></textarea>

<br>
<br>
<br>
<button type="button" class="button-approve" onclick="showApprovedMessage()">APPROVE</button>
<br>
<br>
<a href="StuffSearch_Application">
  <button type="button" class="button-approve">Keluar</button>
</a>

<script>
    function showApprovedMessage() {
      alert("APPROVED");
    }
  </script>




@stop