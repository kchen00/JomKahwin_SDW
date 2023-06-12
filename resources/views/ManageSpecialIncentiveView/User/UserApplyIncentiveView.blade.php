@extends('ManageSpecialIncentiveView.User.base')
@section('ManageSpecialIncentiveView.User.UserApplyIncentiveView')


        <div id="smartwizard-arrows-primary" class="wizard wizard-primary mb-4">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#maklumatPemohon">Maklumat Pemohon<br /><small>Step description</small></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#maklumatPasangan">Maklumat Pasangan<br /><small>Step description</small></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#maklumatLainLain">Maklumat Lain-lain<br /><small>Step description</small></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#dokumen">Dokumen<br /><small>Step description</small></a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="maklumatPemohon" class="tab-pane" role="tabpanel">
                    <form>
                        <div class="form-group">
                            <label for="icNum">No. K/Pengenalan</label>
                            <input type="text" class="form-control" id="icNum" value="{{ $userId }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" value="{{ $userName }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Semasa</label>
                            <input type="text" class="form-control" id="alamat" value="{{ auth()->user()->A_houseAddress }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="telefon">No Telefon</label>
                            <input type="text" class="form-control" id="telefon" value="{{ auth()->user()->A_telephoneNum }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                            <input type="text" class="form-control" id="kewarganegaraan" value="{{ auth()->user()->A_nationality }}" disabled>
                        </div>
                    </form>
                </div>                
                <div id="maklumatPasangan" class="tab-pane" role="tabpanel">
                    @if ($partner)
                        <label>No. K/Pengenalan (IC):</label>
                        <input type="text" value="{{ $partner->account->A_icNum }}" readonly>
                
                        <label>Nama:</label>
                        <input type="text" value="{{ $partner->account->A_name }}" readonly>
                
                        <label>Alamat Semasa:</label>
                        <input type="text" value="{{ $partner->account->A_houseAddress }}" readonly>
                
                        <label>No Telefon:</label>
                        <input type="text" value="{{ $partner->account->A_telephoneNum }}" readonly>
                
                        <label>Kewarganegaraan:</label>
                        <input type="text" value="{{ $partner->account->A_nationality }}" readonly>
                    @else
                        <p>No partner information available.</p>
                    @endif
                </div>                
                <div id="maklumatLainLain" class="tab-pane" role="tabpanel">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="namaBank">Nama Bank Pemohon</label>
                            <input type="text" class="form-control" id="namaBank" name="I_bankName" value="Bank Islam">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="noAkaun">Nombor Akaun Pemohon</label>
                            <input type="text" class="form-control" id="noAkaun" name="I_noAcc" value="123456789">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="namaSaudara">Nama Saudara terdekat</label>
                            <input type="text" class="form-control" id="namaSaudara" name="I_relativeName" value="Omar bin Abi">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="telSaudara">Nombor Telefon Saudara terdekat</label>
                            <input type="text" class="form-control" id="telSaudara" name="I_relativePhone" value="0198765567">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="alamatSaudara">Alamat Rumah Saudara terdekat</label>
                        <input type="text" class="form-control" id="alamatSaudara" name="I_relativeAddress" value="Temerloh, Pahang">
                    </div>
                        <div class="mb-3 col-md-6">
                            <label for="hubungan">Hubungan dengan Pemohon</label>
                            <input type="text" class="form-control" id="hubungan" name="I_relativeRelation" value="Sepupu">
                        </div>
                    </div>
                </div>
                
            
                <div id="dokumen" class="tab-pane" role="tabpanel">
                    <form>
                        <div class="form-group">
                            <label for="slipGaji">Slip Gaji 3 Bulan Terkini</label>
                            <input type="file" class="form-control-file" id="slipGaji" name="slipGaji">
                        </div>
                        <div class="text-right">
                            <a href="user-status" class="btn btn-primary">Submit</a>
                        </div>
                    </form>
                </div>
                
                
            </div>
        </div>
        
        



        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $("#smartwizard-default-primary").smartWizard({
                    theme: "default",
                    showStepURLhash: false
                });
                $("#smartwizard-default-success").smartWizard({
                    theme: "default",
                    showStepURLhash: false
                });
                $("#smartwizard-default-danger").smartWizard({
                    theme: "default",
                    showStepURLhash: false
                });
                $("#smartwizard-default-warning").smartWizard({
                    theme: "default",
                    showStepURLhash: false
                });
                $("#smartwizard-arrows-primary").smartWizard({
                    theme: "arrows",
                    showStepURLhash: false
                });
                $("#smartwizard-arrows-success").smartWizard({
                    theme: "arrows",
                    showStepURLhash: false
                });
                $("#smartwizard-arrows-danger").smartWizard({
                    theme: "arrows",
                    showStepURLhash: false
                });
                $("#smartwizard-arrows-warning").smartWizard({
                    theme: "arrows",
                    showStepURLhash: false
                });
                // Validation
                var $validationForm = $("#smartwizard-validation");
                $validationForm.validate({
                    errorPlacement: function errorPlacement(error, element) {
                        $(element).parents(".error-placeholder").append(
                            error.addClass("invalid-feedback small d-block")
                        )
                    },
                    highlight: function(element) {
                        $(element).addClass("is-invalid");
                    },
                    unhighlight: function(element) {
                        $(element).removeClass("is-invalid");
                    },
                    rules: {
                        "wizard-confirm": {
                            equalTo: "input[name=\"wizard-password\"]"
                        }
                    }
                });
                $validationForm
                    .smartWizard({
                        autoAdjustHeight: false,
                        backButtonSupport: false,
                        useURLhash: false,
                        showStepURLhash: false,
                        toolbarSettings: {
                            toolbarExtraButtons: [$("<button class=\"btn btn-submit btn-primary\" type=\"button\">Finish</button>")]
                        }
                    })
                    .on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                        if (stepDirection === 1) {
                            return $validationForm.valid();
                        }
                        return true;
                    });
                $validationForm.find(".btn-submit").on("click", function() {
                    if (!$validationForm.valid()) {
                        return;
                    }
                    alert("Great! The form is valid and ready to submit.");
                    return false;
                });
            });
        </script>

     



@stop