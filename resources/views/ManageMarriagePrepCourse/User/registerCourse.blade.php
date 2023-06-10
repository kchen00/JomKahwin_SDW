@extends('ManageMarriagePrepCourse.User.base')
@section('ManageMarriagePrepCourse.User.registerCourse')

    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Horizontal form</h5>
                <h6 class="card-subtitle text-muted">Horizontal Bootstrap layout.</h6>
            </div>

            <div class="card-body">
                <form>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No.Kad Pengenalan <font color="#FF0000"> *
                            </font> : </label>
                        <div class="col-sm-10">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Nama Pemohon <font color="#FF0000"> *</font>
                            : </label>
                        <div class="col-sm-10">
                            <input type="pemohon" class="form-control">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat Dalam K/P <font color="#FF0000"> *
                            </font> : </label>
                        <div class="col-sm-10">
                            <input type="alamat" class="form-control">
                            <input type="checkbox" class="form-check-input" name="validation-checkbox">
                            <span class="form-check-label">Tanda Jika Alamat Semasa Sama Dengan Alamat Dalam K/P</span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Negeri <font color="#FF0000"> *</font> :
                        </label>
                        <div class="col-sm-10">
                            <select name="negeri" id="negeri" class="form-control">
                                <option value="negeri">Negeri</option>
                                <option value="johor">JOHOR</option>
                                <option value="kedah">KEDAH</option>
                                <option value="kelantan">KELANTAN</option>
                                <option value="melaka">MELAKA</option>
                                <option value="negeri sembilan">NEGERI SEMBILAN</option>
                                <option value="pahang">PAHANG</option>
                                <option value="perak">PERAK</option>
                                <option value="perlis">PERLIS</option>
                                <option value="pulau pinang">PULAU PINANG</option>
                                <option value="sabah">SABAH</option>
                                <option value="sarawak">SARAWAK</option>
                                <option value="selangor">SELANGOR</option>
                                <option value="terengganu">TERENGGANU</option>
                                <option value="kl">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                <option value="labuan">WILAYAH PERSEKUTUAN LABUAN</option>
                                <option value="putrajaya">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Pilih Sektor Pekerjaan <font
                                color="#FF0000">
                                *</font> : </label>
                        <div class="col-sm-10">
                            <select name="pekerjaan" id="pekerjaan" class="form-control">
                                <option value="pekerjaan">Pilih Sektor Pekerjaan</option>
                                <option value="bekerja sendiri">BEKERJA SENDIRI</option>
                                <option value="pesara">PESARA</option>
                                <option value="sektor awam">SEKTOR AWAM</option>
                                <option value="sektor swasta">SEKTOR SWASTA</option>
                                <option value="tidak bekerja">TIDAK BEKERJA</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tahap Pendidikan <font color="#FF0000"> *
                            </font> : </label>
                        <div class="col-sm-10">
                            <select name="pendidikan" id="pendidikan" class="form-control">
                                <option value="negeri">Pilih Pendidikan Tinggi</option>
                                <option value="phd">PHD</option>
                                <option value="master">MASTER</option>
                                <option value="ijazah">IJAZAH</option>
                                <option value="diploma">DIPLOMA</option>
                                <option value="stpm">STPM</option>
                                <option value="spm">SPM</option>
                                <option value="pt3">PT3 / PMR</option>
                                <option value="upsr">UPSR</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Jantina <font color="#FF0000"> *</font> :
                        </label>
                        <div class="col-sm-10">
                            <select name="jantina" id="jantina" class="form-control">
                                <option value="jantina">Pilih Jantina</option>
                                <option value="lelaki">Lelaki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. Telefon <font color="#FF0000"> *</font>
                            : </label>
                        <div class="col-sm-10">
                            <input type="phone" class="form-control" placeholder="(0107894562)">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Cadangan Tarikh Akad Nikah <font
                                color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <input type="date" id="txtTkhNikah" name="txtTkhNikah" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Slip Pembayaran <font color="#FF0000"> *
                            </font> : </label>
                        <div class="col-sm-10">
                            <form action="/action_page.php">
                                <input type="file" id="myFile" name="filename" class="form-control"><br>
                            </form>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="text-right">
                            <button type="kembali" class="btn btn-primary">Kembali</button>
                            <button type="next" class="btn btn-primary">Seterusnya</button>
                        </div>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
@stop


