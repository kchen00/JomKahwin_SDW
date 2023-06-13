@extends('ManageConsultationView.Admin.base')
@section('ManageConsultationView.Admin.ManageUserApplicationView')


<div class="header">
    <h1 class="header-title">
        Urusan Khidmat Nasihat
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="manageConsultation">Urusan Khidmat Nasihat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Senarai Permohonan</li>
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
                                    <p class="border">Khidmat Nasihat</p>
                                    <label for="namaPekerjaan">Jika lain-lain (Nyatakan)</label>
                                    <p class="border">Tiada</p>
                                    <label for="pendapatan">PAID Pilihan</label>
                                    <p class="border">PAID Pekan</p>
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
                                    <p class="border">020725060231</p>

                                    <label for="namePengadu">Nama Kene Adu</label>
                                    <p class="border">Abi bin Bakar</p>
 
                                    <label for="addressPengadu">Alamat dalam K/P</label>
                                    <p class="border">Pekan, Pahang</p>

                                    <label for="numPhonePengadu">No. Telefon</label>
                                    <p class="border">012-1234567</p>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="maklumat-keneAdu" class="tab-pane" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form>
                                    <label for="ICnumKeneAdu">No. K/P Baru</label>
                                    <p class="border">012345011234</p>

                                    <label for="nameKeneAdu">Nama Kene Adu</label>
                                    <p class="border">Alia binti Ali</p>
 
                                    <label for="addressKeneAdu">Alamat dalam K/P</label>
                                    <p class="border">Kuantan, Pahang</p>

                                    <label for="numPhoneKeneAdu">No. Telefon</label>
                                    <p class="border">013-6453675</p>
                            </form>
                        </div>
                            <div style="text-align: center;">
                                <a href="approvalConsultation" class="btn btn-primary">Kembali ke Senarai Permohonan</a>
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