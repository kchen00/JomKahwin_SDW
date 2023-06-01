@extends('ManageSpecialIncentiveView.User.base')
@section('ManageSpecialIncentiveView.User.UserApplyIncentiveView')


<div class="header">
    <h1 class="header-title">
        Bantuan Perkahwinan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Bantuan Perkahwinan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Permohonan Baru</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Syarat Kelayakan</h5>
            </div>
            <div class="card-body">
                <ul>
                    <li>Insentif ini disediakan untuk pasangan yang pengantin lelakinya berpendapatan <b>RM5000.00</b> ke bawah tertakluk kepada syarat-syarat dan garis panduan yang ditentukan</li>
                    <li>Hanya <b>anak-anak pahang</b> sahaja yang layak menerima insentif ini</li>
                    <li>Sama ada pengantin lelaki atau perempuan mestilah <b>anak kelahiran Negeri Pahang</b></li>
                    <li>Pasangan pengantin yang mana pengantin lelaki sahaja berpendapatan <b>RM5000.00 dan ke bawah</b> layak menerima insentif ini</li>
                    <li>Bagi perkahwinan ini mestilah didaftarkan di Negeri Pahang dengan Kebenaran Pejabat Agama Islam Daerah</li>
                    <li>Perkahwinan anak Pahang yang didaftarkan di luar Negeri Pahang, pengantin perlu membuat permohonan dan pengesahan di Pejabat Agama Islam (dimana tempat permohonan)</li>
                    <li>Bagi permastautin di negeri Pahang sekurang-kurangnya <b>10 tahun atau lebih</b>, perlu mendapatkan pengesahan dari Penghulu/ADUN Kawasan/pengurus FELDA/Imam Qaryah atau Penyelaras</li>
                    <li>Duda atau Janda atau salah seorang yang mana pasangannya adalah anak negeri Pahang dan berkelayakan, pekahwinan kali pertama dengan pasangan yang lain, layak untuk menerima insentif</li>
                  </ul> 
                  <div style="display: flex;">
                    <div style="flex: 1;">
                        <h6>ANDA TIDAK LAYAK SEKIRANYA :</h6>
                        <ul>
                            <li>Poligami</li>
                            <li>Nikah tanpa kebenaran</li>
                            <li>Kedua pasangan bukan asal Pahang</li>
                            <li>Pendapatan lelaki melebihi RM5000.00</li>
                            <li>Nikah semula (pasangan yang sama selepas tamat tempoh iddah)</li>
                        </ul> 
                    </div>
                    <div style="flex: 1;">
                        <h6>DOKUMEN DIPERLUKAN :</h6>
                        <p><b>Permohonan mestilah disertakan dengan :</b></p>
                        <ul>
                            <li>2 Salinan Kad Pengenalan pemohon (depan dan belakang).</li>
                            <li>1 Salinan catatan akad nikah pemohon</li>
                            <li>2 Salinan penyata akaun bank pemohon</li>
                        </ul> 
                    </div>
                </div>   
                <div style="text-align: center;">
                    <a href="" class="btn btn-primary">Seterusnya</a>
                </div>          
            </div>
        </div>
    </div>
</div>






@stop