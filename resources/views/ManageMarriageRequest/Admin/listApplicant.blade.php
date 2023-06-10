@extends('ManageMarriageRequest.Admin.base')
@section('ManageMarriageRequest.Admin.listApplicant')

<div class="col-5 col-xl-12">
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">No.K/P Pemohon : </label>
                    <div class="col-sm-10">
                        <input type="kad" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Negeri <font color="#FF0000"> *</font> : </label>
                    <div class="col-sm-10"> 
                        <select name="negeri" id="negeri" class="form-control">
                            <option value="negeri">Negeri</option>
                            
                        </select>
                    </div>
                </div>