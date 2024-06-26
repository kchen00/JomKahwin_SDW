@extends('ManageMarriageRequest.Admin.base')
@section('ManageMarriageRequest.ApplicationInformation')

    <div class='header'>
        <h5>DAFTAR PESERTA>>Kehadiran</h5>

        <div class="col-5 col-xl-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 text-sm-end">Anjuran </label>
                            <div class="col-sm-3">
                                <input type="kad" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 text-sm-end">Tahun</label>
                            <div class="col-sm-3">
                                <select class="form-select" id="Tahun" name="Tahun" class="form-control">
                                    <option value="">Tahun</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label col-sm-2 text-sm-end">No. Siri</label>
                            <div class="col-sm-3">
                                <input type="kad" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="text-right">
                                <button type="kembali" class="btn btn-primary">Senarai Peserta</button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"></label>
                            <textarea class="form-control text-center" placeholder="Anjuran: PEJABAT AGAMA ISLAM&#10;No.Siri: TLOH/001/2023&#10;Tarikh Kursus: 27-28 JANUARI 2023&#10;Tempat Kursus: DEWAN TARBIAH ISLAM PERAMU KAMPUNG PERAMU 25150 KUANTAN PAHANG" rows="4"></textarea>
                        </div>
                        

                        <div class="col-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:40%;">Bil</th>
                                            <th style="width:25%">Nama Peserta</th>
                                            <th style="width:25%">No.Kad Pengenalan</th>
                                            <th style="width:25%">Jantina</th>
                                            <th style="width:40%;">Kehadiran</th>
                                            <th style="width:40%;">Catatan</th>
                                            <th style="width: 40%;">catatan<div class="additional-box"></div></th>
                                            <th>LULUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>AHMAD ZULHILMI BIN MOHD</td>
                                            <td>010115110021</td>
                                            <td>LELAKI</td>
                                            <td>HADIR</td>
                                            <td>CATATAN <font color="AEF359"></td>
                                            <td class="table-action">
                                                <a href="#"><i class="align-middle fas fa-fw fa-check-square"></i></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    @stop
