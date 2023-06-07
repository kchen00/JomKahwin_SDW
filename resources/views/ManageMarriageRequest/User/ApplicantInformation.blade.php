@extends('ManageMarriageRequest.User.base')
@section('ManageMarriageRequest.User.ApplicantInformation')

    <div class='header'>
        <h5>DAFTAR PESERTA>>Kehadiran</h5>

        <div class="col-6 col-lg-12">
            <div class="tab tab-primary">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#primary-tab-1" data-bs-toggle="tab"
                            role="tab">MAKLUMAT PEMOHON </a></li>
                    <li class="nav-item"><a class="nav-link" href="#primary-tab-2" data-bs-toggle="tab"
                            role="tab">MAKLUMAT PASANGAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#primary-tab-3" data-bs-toggle="tab"
                            role="tab">MAKLUMAT PERKAHWINAN</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="primary-tab-1" role="tabpanel">
                        
                        <div class="card-body">
                            <form>
                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">No. KP </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Nama Pasangan </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Tarikh Lahir </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Umur </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Jantina</label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Bangsa </label>
                                    <div class="col-sm-3">
                                        <input type="kad" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-form-label col-sm-1 text-sm-end">Warganegara </label>
                                    <div class="col-sm-3">
                                        <select class="form-select" id="WARGANEGARA" name="Tahun" class="form-control">
                                            <option value="WARGANEGARA"></option>
                                            <option value="ya">WARGANEGARA</option>
                                            <option value="bukan">BUKAN WARGANEGARA</option>
                                        </select>
                                    </div>
                                </div>


                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="primary-tab-2" role="tabpanel">
                    <h4 class="tab-title"></h4>
                    
                </div>
                <div class="tab-pane" id="primary-tab-3" role="tabpanel">
                    <h4 class="tab-title">One more</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor tellus
                        eget condimentum
                        rhoncus. Aenean massa. Cum sociis natoque penatibus et magnis neque dis parturient montes, nascetur
                        ridiculus mus.
                    </p>
                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        Donec pede
                        justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                        venenatis vitae,
                        justo.</p>
                </div>
            </div>
        </div>
    </div>
@stop
