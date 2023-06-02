@extends('ManageSpecialIncentiveView.User.base')
@section('ManageSpecialIncentiveView.User.UserApplyIncentiveView')

<div class="row">
    <div class="col-12 col-xxl-6">
        <div id="smartwizard-default-primary" class="wizard wizard-primary mb-4">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#maklumat-pemohon">Maklumat Pemohon<br /><small>Step description</small></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#maklumat-pasangan">Maklumat Pasangan<br /><small>Step description</small></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#maklumat-lain2">Maklumat Lain-Lain<br /><small>Step description</small></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#dokumen">Muat Naik Dokumen<br /><small>Step description</small></a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="maklumat-pemohon" class="tab-pane" role="tabpanel">
                    <div class="col-md-12">
                            <div class="card-body">
                                <form method="POST" action="/user-status" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label for="jenisPekerjaan">Jenis Pekerjaan</label>
                                            <input type="text" class="form-control" id="jenisPekerjaan" name="A_jobSector">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="namaPekerjaan">Nama Pekerjaan</label>
                                            <input type="text" class="form-control" id="namaPekerjaan" name="">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="pendapatan">Pendapatan</label>
                                            <input type="text" class="form-control" id="pendapatan" name="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                        <label for="namaMajikan">Nama Majikan</label>
                                        <input type="password" class="form-control" id="namaMajikan" name="U_employerName">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="alamatMajikan">Alamat Majikan</label>
                                        <input type="text" class="form-control" id="alamatMajikan" name="">
                                     </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label for="poskod">Poskod</label>
                                            <input type="text" class="form-control" id="poskod" name="A_jobSector">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="bandar">Bandar</label>
                                            <input type="text" class="form-control" id="bandar" name="">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label for="negeri">Negeri</label>
                                            <input type="text" class="form-control" id="negeri" name="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                        <label for="namaBank">Nama Bank</label>
                                        <input type="text" class="form-control" id="namaBank" name="U_employerName">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="noAkaun">Nombor Akaun</label>
                                        <input type="text" class="form-control" id="noAkaun" name="">
                                     </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                <div id="maklumat-pasangan" class="tab-pane" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="jenisPekerjaan">Jenis Pekerjaan</label>
                                        <input type="text" class="form-control" id="jenisPekerjaan" name="A_jobSector">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="namaPekerjaan">Nama Pekerjaan</label>
                                        <input type="text" class="form-control" id="namaPekerjaan" name="">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="pendapatan">Pendapatan</label>
                                        <input type="text" class="form-control" id="pendapatan" name="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label for="namaMajikan">Nama Majikan</label>
                                    <input type="text" class="form-control" id="namaMajikan" name="U_employerName">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="alamatMajikan">Alamat Majikan</label>
                                    <input type="text" class="form-control" id="alamatMajikan" name="">
                                 </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="poskod">Poskod</label>
                                        <input type="text" class="form-control" id="poskod" name="A_jobSector">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="bandar">Bandar</label>
                                        <input type="text" class="form-control" id="bandar" name="">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="negeri">Negeri</label>
                                        <input type="text" class="form-control" id="negeri" name="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="maklumat-lain2" class="tab-pane" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label for="namaSaudara">Nama</label>
                                    <input type="text" class="form-control" id="namaSaudara" name="">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="hubungan">Hubungan dengan Pemohon</label>
                                    <input type="text" class="form-control" id="hubungan" name="">
                                 </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                    <label for="telSaudara">Nombor Telefon</label>
                                    <input type="text" class="form-control" id="telSaudara" name="">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="telRumahSaudara">Nombor Telefon Rumah</label>
                                    <input type="text" class="form-control" id="telRumahSaudara" name="">
                                 </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamatSaudara">Alamat Rumah</label>
                                    <input type="text" class="form-control" id="alamatSaudara">
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="poskod">Poskod</label>
                                        <input type="text" class="form-control" id="poskod" name="A_jobSector">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="bandar">Bandar</label>
                                        <input type="text" class="form-control" id="bandar" name="">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="negeri">Negeri</label>
                                        <input type="text" class="form-control" id="negeri" name="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="dokumen" class="tab-pane" role="tabpanel">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                 <div class="mb-3 col-md-6">
                                    <label for="slipGaji">Slip gaji 3 bulan terkini</label>
                                    <input type="file" class="form-control" name="dokumen" multiple class="form-control" id="slipGaji">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="suratPengesahan">Surat Pengesahan</label>
                                    <input type="file" class="form-control" multiple class="form-control" id="suratPengesahan" name="">
                                 </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-label">Saya mengaku dengan nama Allah S.W.T bahawa semua keterangan yang telah diberikan adalah benar. Pihak kerajaan Negeri atau Jabatan Agama Islam Pahang berhak menolak permohonan saya ini sekiranya maklumat/keterangan yang diberikan adalah TIDAK BENAR.</span>
                                </label>
                            </div>
                            </form>
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