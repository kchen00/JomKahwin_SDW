@extends('ManageConsultationView.User.base')
@section('ManageConsultationView.User.ApplyConsultationView')


<div class="header">
    <h1 class="header-title">
        Khidmat Nasihat
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Khidmat Nasihat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Permohonan Pendaftaran</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-12 col-xxl-6">
        <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#tujuan-pengaduan">Tujuan Pengaduan<br/></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#maklumat-pengadu">Maklumat Pengadu<br/></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#maklumat-keneAdu">Maklumat Kene Adu<br/></a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="tujuan-pengaduan" class="tab-pane" role="tabpanel">
                    <div class="col-md-12">
                            <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="row">
                                    <div class="mb-3 col-md-4">
                                    <label for="tujuan">Tujuan Aduan</label><br>
                                    <select>
                                        <option selected value="" disabled selected>-Sila Pilih-</option>
                                        <option value="penceraian">Penceraian</option>
                                        <option value="waliEnggan">Wali Enggan</option>
                                        <option value="waliEnggan">Khidmat Nasihat</option>
                                    </select><br><br>
                                    <label for="namaPekerjaan">Jika lain-lain (Nyatakan)</label>
                                    <input type="text" class="form-control" id="other" name="other"><br>
                                    <label for="pendapatan">PAID Pilihan</label>
                                    <input type="text" class="form-control" id="paidpilihan" name="paidpilihan"><br>
                                    </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                <div id="maklumat-pengadu" class="tab-pane" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form>
                                    <label for="ICnumPengadu">No. K/P Baru</label>
                                    <input type="text" class="form-control" id="ICnumPengadu" name="ICnumPengadu">

                                    <label for="namePengadu">Nama Kene Adu</label>
                                    <input type="text" class="form-control" id="namePengadu" name="namePengadu">
 
                                    <label for="addressPengadu">Alamat dalam K/P</label>
                                    <input type="text" class="form-control" id="addressPengadu" name="addressPengadu">

                                    <label for="numPhonePengadu">No. Telefon</label>
                                    <input type="text" class="form-control" id="numPhonePengadu" name="numPhonePengadu">
                            </form>
                        </div>
                    </div>
                </div>
                <div id="maklumat-keneAdu" class="tab-pane" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form>
                                    <label for="ICnumKeneAdu">No. K/P Baru</label>
                                    <input type="text" class="form-control" id="ICnumKeneAdu" name="ICnumKeneAdu">

                                    <label for="nameKeneAdu">Nama Kene Adu</label>
                                    <input type="text" class="form-control" id="nameKeneAdu" name="nameKeneAdu">
 
                                    <label for="addressKeneAdu">Alamat dalam K/P</label>
                                    <input type="text" class="form-control" id="addressKeneAdu" name="addressKeneAdu">

                                    <label for="numPhoneKeneAdu">No. Telefon</label>
                                    <input type="text" class="form-control" id="numPhoneKeneAdu" name="numPhoneKeneAdu">
                            </form>
                            
                        </div>
                            <div style="text-align: center;">
                                <a href="viewStatusConsultation" class="btn btn-primary">Hantar</a>
                            </div>
                    </div>
                </div>
            </div>
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