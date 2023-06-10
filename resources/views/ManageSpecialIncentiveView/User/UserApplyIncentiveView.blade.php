@extends('ManageSpecialIncentiveView.User.base')
@section('ManageSpecialIncentiveView.User.UserApplyIncentiveView')


                        <div class="card">
                            <form method="POST" action="/user-apply" enctype="multipart/form-data">
                                @csrf 
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="namaBank">Nama Bank</label>
                                        <input type="text" class="form-control" id="namaBank" name="I_bankName">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="noAkaun">Nombor Akaun</label>
                                        <input type="text" class="form-control" id="noAkaun" name="I_noAcc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="namaSaudara">Nama</label>
                                        <input type="text" class="form-control" id="namaSaudara" name="I_relativeName">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="telSaudara">Nombor Telefon</label>
                                        <input type="text" class="form-control" id="telSaudara" name="I_relativePhone">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamatSaudara">Alamat Rumah</label>
                                    <input type="text" class="form-control" id="alamatSaudara" name="I_relativeAddress">
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="poskod">Poskod</label>
                                        <input type="text" class="form-control" id="poskod" name="I_relativePostcode">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="bandar">Bandar</label>
                                        <input type="text" class="form-control" id="bandar" name="I_relativeCity">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="negeri">Negeri</label>
                                        <input type="text" class="form-control" id="negeri" name="I_relativeState">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="hubungan">Hubungan dengan Pemohon</label>
                                        <input type="text" class="form-control" id="hubungan" name="I_relativeRelation">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="telRumahSaudara">Nombor Telefon Rumah</label>
                                        <input type="text" class="form-control" id="telRumahSaudara" name="I_relativePhoneHouse">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            
</div>


     



@stop