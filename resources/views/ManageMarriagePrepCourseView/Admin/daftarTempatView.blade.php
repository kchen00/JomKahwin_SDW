@extends('ManageMarriagePrepCourseView.Admin.base')
@section('ManageMarriagePrepCourseView.Admin.daftarTempatView')

    <div class="col-6 col-xl-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Tempat <font color="#FF0000"> *</font> :
                        </label>
                        <div class="col-sm-10">
                            <input type="kad" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Alamat <font color="#FF0000"> *</font> :
                        </label>
                        <div class="col-sm-10">
                            <input type="pemohon" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">No. Telefon <font color="#FF0000"> *</font> :
                        </label>
                        <div class="col-sm-10">
                            <input type="pemohon" class="form-control">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Daerah <font color="#FF0000"> *</font> : </label>
                        <div class="col-sm-10">
                            <select name="daerah" id="daerah" class="form-control">
                                <option value="daerah">Daerah</option>
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
                        <div class="text-right" style="display: flex; justify-content: center; align-items: center;">
                            <button type="kembali" class="btn btn-primary">Simpan</button>
                            <span class="form-check-label">Ruangan yang bertanda (<font color="#FF0000"> *</font> )
                                adalah WAJIB diisi </span>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">

                            </div>

                            <table class="table table-bordered" text="right">
                                <thead>
                                    <tr>
                                        <th style="width:40%;">Bil</th>
                                        <th style="width:25%">Nama Tempat</th>
                                        <th style="width:25%">Alamat</th>
                                        <th style="width:25%">Daerah</th>
                                        <th style="width:25%">No.Telefon</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>DEWAN SRI SENTOSA</td>
                                        <td>SK GEMILANG, KUANTAN, PAHANG</td>
                                        <td>KUANTAN</td>
                                        <td>0114532937</td>
                                        <td class="table-action">
                                            <a href="#"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                            <a href="#"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table><br><br><br>
                            <div class="col-sm-17 ms-sm-auto"
                                style="display: flex; justify-content: center; align-items: center;">
                                <a href="maklumat" class= "btn btn-primary mr-6 ">Kembali</button></a>&nbsp;&nbsp;
                                <a href="peserta" class= "btn btn-primary mr-6 ">Seterusnya</button>&nbsp;&nbsp;</a>
                                {{-- <button type="submit" class="btn btn-primary mr-6 ">Kembali</button>&nbsp;&nbsp;
                                <button type="submit" class="btn btn-primary">Seterusnya</button>&nbsp;&nbsp; --}}
                            </div>
                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
@stop
