
<script src="<?= BASE_ASSET; ?>js/custom.js"></script>


<?= form_open('', [
    'name'    => 'form_form_formtracer', 
    'class'   => 'form-horizontal form_form_formtracer', 
    'id'      => 'form_form_formtracer',
    'enctype' => 'multipart/form-data', 
    'method'  => 'POST'
]); ?>
 
<div class="form-group ">
    <label for="nomor_mahasiswa" class="col-sm-2 control-label">Nomor Mahasiswa 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="number" class="form-control" name="nomor_mahasiswa" id="nomor_mahasiswa" placeholder=""  >
        <small class="info help-block">
        <b>Input Nomor Mahasiswa</b> Max Length : 7.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="kode_pt" class="col-sm-2 control-label">Kode PT 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="kode_pt" id="kode_pt" placeholder=""  >
        <small class="info help-block">
        <b>Format Kode PT must</b> Valid Number,  <b>Input Kode PT</b> Max Length : 6.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="tahun_lulus" class="col-sm-2 control-label">Tahun Lulus 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="number" class="form-control" name="tahun_lulus" id="tahun_lulus" placeholder=""  >
        <small class="info help-block">
        <b>Input Tahun Lulus</b> Max Length : 4.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="kode_prodi" class="col-sm-2 control-label">Kode Prodi 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="number" class="form-control" name="kode_prodi" id="kode_prodi" placeholder=""  >
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group ">
    <label for="nama" class="col-sm-2 control-label">Nama 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="nama" id="nama" placeholder=""  >
        <small class="info help-block">
        <b>Input Nama</b> Max Length : 25.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="nomor_telephone_handphone" class="col-sm-2 control-label">Nomor Telephone/ Handphone 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="number" class="form-control" name="nomor_telephone_handphone" id="nomor_telephone_handphone" placeholder=""  >
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group ">
    <label for="alamat_email" class="col-sm-2 control-label">Alamat Email 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="email" class="form-control" name="alamat_email" id="alamat_email" placeholder=""  >
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="">
    <div class="col-sm-14 col-md-offset-2">
        <h4 >Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?(1 = Sangat Rendah, 5 = Sangat Tinggi)</h4>
    </div>
    <hr>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" class="col-sm-2 control-label">Waktu Yang Dihabiskan Untuk Memeproleh Pekerjaan 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 1-3 Bulan Sebelum LULUS UJIAN" > Kira-kira 1-3 Bulan Sebelum LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 4-6 Bulan Sebelum LULUS UJIAN" > Kira-kira 4-6 Bulan Sebelum LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 6-9 Bulan Sebelum LULUS UJIAN" > Kira-kira 6-9 Bulan Sebelum LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 9-12 Bulan Sebelum LULUS UJIAN" > Kira-kira 9-12 Bulan Sebelum LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN" > Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 1-3 Bulan Sesudah LULUS UJIAN" > Kira-kira 1-3 Bulan Sesudah LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 4-6 Bulan Sesudah LULUS UJIAN" > Kira-kira 4-6 Bulan Sesudah LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 6-9 Bulan Sesudah LULUS UJIAN" > Kira-kira 6-9 Bulan Sesudah LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 9-12 Bulan Sesudah LULUS UJIAN" > Kira-kira 9-12 Bulan Sesudah LULUS UJIAN            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 1 Tahun Sesudah LULUS UJIAN" > Kira-kira 1 Tahun Sesudah LULUS UJIAN            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group ">
    <label for="sebutkan_sumberdana_dalam_pembiayaan_kuliah_" class="col-sm-2 control-label">Sebutkan Sumberdana Dalam Pembiayaan Kuliah? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <select  class="form-control chosen chosen-select" name="sebutkan_sumberdana_dalam_pembiayaan_kuliah_" id="sebutkan_sumberdana_dalam_pembiayaan_kuliah_" data-placeholder="Select Sebutkan Sumberdana Dalam Pembiayaan Kuliah?" test = "test" >
            <option value=""></option>
            <option value="[1] Biaya Sendiri">[1] Biaya Sendiri</option>
            <option value="{2] Keluarga">{2] Keluarga</option>
            <option value="[3] Beasiswa ADIK">[3] Beasiswa ADIK</option>
            <option value="[4] Beasiswa Bidikmisi">[4] Beasiswa Bidikmisi</option>
            <option value="[5[ Beasiswa AFIRMASI">[5[ Beasiswa AFIRMASI</option>
            <option value="[6] Beasiswa Perusahaan Negeri">[6] Beasiswa Perusahaan Negeri</option>
            <option value="[7] Beasiswa Perusahaan Swasta">[7] Beasiswa Perusahaan Swasta</option>
            <option value="[8] Lainnya. . . ">[8] Lainnya. . . </option>
            </select>
        <small class="info help-block">
        Sebutkan sumberdana dalam pembiayaan kuliah?</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_" class="col-sm-2 control-label">Sedang Bekerja (termasuk Kerja Sambilan Dan Wirausaha) ? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-6">
        <div class="col-md-2 padding-left-0">
            <label>
                <input type="radio" class="flat-red" name="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_" id="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_"  value="yes" >
                Yes
            </label>
        </div>
        <div class="col-md-14">
            <label>
                <input type="radio" class="flat-red" name="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_" id="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_"  value="no" >
                No
            </label>
        </div>
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" class="col-sm-2 control-label">Hubungan Antara Bidang Studi Dengan Pekerjaan Anda? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Sangat Erat" > Sangat Erat            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Erat" > Erat            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Cukup Erat" > Cukup Erat            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Kurang erat" > Kurang erat            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Tidak Sama Sekali" > Tidak Sama Sekali            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" class="col-sm-2 control-label">Tingkat Pendidikan Yang Tepat/sesuai Untuk Pekerjaan Saat Ini? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" value="Setingkat Lebih Tinggi" > Setingkat Lebih Tinggi            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" value="Tingkat Yg Sama" > Tingkat Yg Sama            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" value="Setingkat Lebih Rendah" > Setingkat Lebih Rendah            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" value="Tidak Perlu Pendidikan Tinggi" > Tidak Perlu Pendidikan Tinggi            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group ">
    <label for="kira_kira_berapa_pendapatan_anda_setiap_bulannya_" class="col-sm-2 control-label">Kira-kira Berapa Pendapatan Anda Setiap Bulannya? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="kira_kira_berapa_pendapatan_anda_setiap_bulannya_" id="kira_kira_berapa_pendapatan_anda_setiap_bulannya_" placeholder="Isi Dengan Angka Saja Tanpa Titik/Koma"  test = "test" >
        <small class="info help-block">
        Isi Dengan Angka Saja!</small>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="perkuliahan" class="col-sm-2 control-label">Perkuliahan 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="perkuliahan" value="Sangat Besar" > Sangat Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="perkuliahan" value="Besar" > Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="perkuliahan" value="Cukup Besar" > Cukup Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="perkuliahan" value="Kurang" > Kurang            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="perkuliahan" value="Tidak Sama Sekali" > Tidak Sama Sekali            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="desmonstrasi" class="col-sm-2 control-label">Desmonstrasi 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="desmonstrasi" value="Sangat Besar" > Sangat Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="desmonstrasi" value="Besar" > Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="desmonstrasi" value="Cukup Besar" > Cukup Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="desmonstrasi" value="Kurang" > Kurang            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="desmonstrasi" value="Tidak Sama Sekali" > Tidak Sama Sekali            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="partisipasi_dalam_proyek_riset" class="col-sm-2 control-label">Partisipasi Dalam Proyek Riset 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Sangat Besar" > Sangat Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Besar" > Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Cukup Besar" > Cukup Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Kurang" > Kurang            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Tidak Sama Sekali" > Tidak Sama Sekali            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="magang" class="col-sm-2 control-label">Magang 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="magang" value="Sangat Besar" > Sangat Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="magang" value="Besar" > Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="magang" value="Cukup Besar" > Cukup Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="magang" value="Kurang" > Kurang            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="magang" value="Tidak Sama Sekali" > Tidak Sama Sekali            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="praktikum" class="col-sm-2 control-label">Praktikum 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="praktikum" value="Sangat Besar" > Sangat Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="praktikum" value="Besar" > Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="praktikum" value="Cukup Besar" > Cukup Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="praktikum" value="Kurang" > Kurang            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="praktikum" value="Tidak Sama Sekali" > Tidak Sama Sekali            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="kerja_lapangan" class="col-sm-2 control-label">Kerja Lapangan 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kerja_lapangan" value="Sangat Besar" > Sangat Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kerja_lapangan" value="Besar" > Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kerja_lapangan" value="Cukup Besar" > Cukup Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kerja_lapangan" value="Kurang" > Kurang            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kerja_lapangan" value="Tidak Sama Sekali" > Tidak Sama Sekali            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="diskusi" class="col-sm-2 control-label">Diskusi 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="diskusi" value="Sangat Besar" > Sangat Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="diskusi" value="Besar" > Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="diskusi" value="Cukup Besar" > Cukup Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="diskusi" value="Kurang" > Kurang            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="diskusi" value="Tidak Sama Sekali" > Tidak Sama Sekali            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group ">
    <label for="mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_" class="col-sm-2 control-label">Mulai Mencari Pekerjaan, (pekerjaan Sambilan Tidak Dimasukan) 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <select  class="form-control chosen chosen-select" name="mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_" id="mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_" data-placeholder="Select Mulai Mencari Pekerjaan, (pekerjaan Sambilan Tidak Dimasukan)" >
            <option value=""></option>
            <option value="Kira-kira 1-3 bulan Sebelum Lulus">Kira-kira 1-3 bulan Sebelum Lulus</option>
            <option value="Kira-kira 3-6 bulan Sebelum Lulus">Kira-kira 3-6 bulan Sebelum Lulus</option>
            <option value="Kira-kira 6-9 bulan Sebelum Lulus">Kira-kira 6-9 bulan Sebelum Lulus</option>
            <option value="Kira-kira 9-12 bulan Sebelum Lulus">Kira-kira 9-12 bulan Sebelum Lulus</option>
            <option value="Kira-kira 1 Tahun Lebih Sebelum Lulus"></option>
            <option value="Kira-kira 1-3 bulan Sesudah Lulus">Kira-kira 1-3 bulan Sesudah Lulus</option>
            <option value="Kira-kira 3-6 bulan Sesudah Lulus">Kira-kira 3-6 bulan Sesudah Lulus</option>
            <option value="Kira-kira 6-9 bulan Sesudah Lulus">Kira-kira 6-9 bulan Sesudah Lulus</option>
            <option value="Kira-kira 9-12 bulan Sesudah Lulus">Kira-kira 9-12 bulan Sesudah Lulus</option>
            <option value="Kira-kira 1 Tahun Lebih Sesudah Lulus">Kira-kira 1 Tahun Lebih Sesudah Lulus</option>
            <option value="Saya Tidak Mencari Pekerjaan">Saya Tidak Mencari Pekerjaan</option>
            </select>
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group ">
    <label for="bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu" class="col-sm-2 control-label">Bagaimana Cara Pekerjaan Tersebut? Jawaban Bisa Lebih Dari Satu 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <select  class="form-control chosen chosen-select" name="bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu[]" id="bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu" data-placeholder="Select Bagaimana Cara Pekerjaan Tersebut? Jawaban Bisa Lebih Dari Satu" multiple >
            <option value=""></option>
            <option value="Saya Tidak Mencari Pekerjaan Sebelumnya">Saya Tidak Mencari Pekerjaan Sebelumnya</option>
            <option value="Melalui iklan di koran/majalah, brosur">Melalui iklan di koran/majalah, brosur</option>
            <option value="Melamar ke perusahaan tanpa mengetahui lowongan yang ada">Melamar ke perusahaan tanpa mengetahui lowongan yang ada</option>
            <option value="Pergi ke bursa/pameran kerja">Pergi ke bursa/pameran kerja</option>
            <option value="Mencari lewat internet/iklan online/milis">Mencari lewat internet/iklan online/milis</option>
            <option value="Dihubungi oleh perusahaan">Dihubungi oleh perusahaan</option>
            <option value="Menghubungi Kemenakertrans">Menghubungi Kemenakertrans</option>
            <option value="Menghubungi agen tenaga kerja komersial/swasta">Menghubungi agen tenaga kerja komersial/swasta</option>
            <option value="Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas">Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas</option>
            <option value="Menghubungi kantor kemahasiswaan/hubungan alumni">Menghubungi kantor kemahasiswaan/hubungan alumni</option>
            <option value="Membangun jejaring (network) sejak masih kuliah">Membangun jejaring (network) sejak masih kuliah</option>
            <option value="Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)</option>
            <option value="Membangun bisnis sendiri">Membangun bisnis sendiri</option>
            <option value="Melalui penempatan kerja atau magang  ">Melalui penempatan kerja atau magang  </option>
            <option value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah">Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</option>
            <option value="Lainnya">Lainnya</option>
            </select>
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group ">
    <label for="berapa_perusahaan_yang_dilamar_lewat_surat_email_" class="col-sm-2 control-label">Berapa Perusahaan Yang Dilamar (lewat Surat/email) 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="number" class="form-control" name="berapa_perusahaan_yang_dilamar_lewat_surat_email_" id="berapa_perusahaan_yang_dilamar_lewat_surat_email_" placeholder=""  >
        <small class="info help-block">
        Isi dengan jumlah perusahaan yang anda lamar sebelum anda memeroleh pekerjaan pertama?</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="_jumlah_perusahaan_yang_merespons_lamaran_anda_" class="col-sm-2 control-label"> Jumlah Perusahaan Yang Merespons Lamaran Anda? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="number" class="form-control" name="_jumlah_perusahaan_yang_merespons_lamaran_anda_" id="_jumlah_perusahaan_yang_merespons_lamaran_anda_" placeholder=""  >
        <small class="info help-block">
        Isi dengan jumlah perusahaan/instansi/institusi yang merespons lamaran anda?</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_" class="col-sm-2 control-label">Jumlah Perusahaan Yang Mengundang Anda Untuk Wawancara? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="number" class="form-control" name="jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_" id="jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_" placeholder=""  >
        <small class="info help-block">
        Jumlah banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu" class="col-sm-2 control-label">Bagaimana Situasi Anda Saat Ini? Jawaban Bisa Lebih Dari Satu 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <select  class="form-control chosen chosen-select" name="bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu[]" id="bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu" data-placeholder="Select Bagaimana Situasi Anda Saat Ini? Jawaban Bisa Lebih Dari Satu" multiple >
            <option value=""></option>
            <option value="Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana">Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana</option>
            <option value="Saya menikah">Saya menikah</option>
            <option value="Saya sibuk dengan keluarga dan anak-anak ">Saya sibuk dengan keluarga dan anak-anak </option>
            <option value="Saya sekarang sedang mencari pekerjaan">Saya sekarang sedang mencari pekerjaan</option>
            <option value="Lainnya ">Lainnya </option>
            </select>
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group ">
    <label for="apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_" class="col-sm-2 control-label">Apakah Anda Aktif Mencari Pekerjaan Dalam 4 Minggu Terkahir? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <select  class="form-control chosen chosen-select" name="apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_" id="apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_" data-placeholder="Select Apakah Anda Aktif Mencari Pekerjaan Dalam 4 Minggu Terkahir?" >
            <option value=""></option>
            <option value="Saya Sudah Bekerja">Saya Sudah Bekerja</option>
            <option value="Saya Sudah Menikah">saya Sudah Menikah</option>
            <option value="Saya Sibuk Dengan Keluarga dan Anak-anak">Saya Sibuk Dengan Keluarga dan Anak-anak</option>
            <option value="Saya Sekarang Sedang Mencari Pekerjaan">Saya Sekarang Sedang Mencari Pekerjaan</option>
            <option value="Lainnya">Lainnya</option>
            </select>
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group ">
    <label for="apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_" class="col-sm-2 control-label">Apa Jenis Perusahaan Tempat Anda Bekerja Sekarang? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <select  class="form-control chosen chosen-select" name="apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_" id="apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_" data-placeholder="Select Apa Jenis Perusahaan Tempat Anda Bekerja Sekarang?" >
            <option value=""></option>
            <option value="Instansi pemerintah(termasuk BUMN)">Instansi pemerintah(termasuk BUMN)</option>
            <option value="Organisasi non-profit/Lembaga Swadaya Masyarakat">Organisasi non-profit/Lembaga Swadaya Masyarakat</option>
            <option value="Perusahaan Swasta">Perusahaan Swasta</option>
            <option value="Wiraswasta/Perusahaan Sendiri">Wiraswasta/Perusahaan Sendiri</option>
            <option value="Lembaga Pendidikan/Sekolah">Lembaga Pendidikan/Sekolah</option>
            <option value="Lainnya">Lainnya</option>
            </select>
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group ">
    <label for="jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_" class="col-sm-2 control-label">Jika Pekerjaan Tidak Sesuai, Kenapa Mengambilnya? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <select  class="form-control chosen chosen-select" name="jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_" id="jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_" data-placeholder="Select Jika Pekerjaan Tidak Sesuai, Kenapa Mengambilnya?" >
            <option value=""></option>
            <option value="Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya">Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya</option>
            <option value="Saya belum mendapatkan pekerjaan yang lebih sesuai">Saya belum mendapatkan pekerjaan yang lebih sesuai</option>
            <option value="Di pekerjaan ini saya memeroleh prospek karir yang baik">Di pekerjaan ini saya memeroleh prospek karir yang baik</option>
            <option value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya">Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya</option>
            <option value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya">Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya</option>
            <option value="Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.">Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.</option>
            <option value="Pekerjaan saya saat ini lebih aman/terjamin/secure">Pekerjaan saya saat ini lebih aman/terjamin/secure</option>
            <option value="Pekerjaan saya saat ini lebih menarik">Pekerjaan saya saat ini lebih menarik</option>
            <option value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll">Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll</option>
            <option value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.">Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.</option>
            <option value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya">Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya</option>
            <option value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.">Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.</option>
            <option value="Lainnya">Lainnya</option>
            </select>
        <small class="info help-block">
        </small>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" class="col-sm-2 control-label">Pengetahuan Di Bidang Atau Disiplin Ilmu Anda 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" class="col-sm-2 control-label">Pengetahuan Di Luar Bidang Atau Disiplin Ilmu Anda 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="pengetahuan_umum" class="col-sm-2 control-label">Pengetahuan Umum 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_umum" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_umum" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_umum" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_umum" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="pengetahuan_umum" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="bahasa_inggris" class="col-sm-2 control-label">Bahasa Inggris 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bahasa_inggris" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bahasa_inggris" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bahasa_inggris" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bahasa_inggris" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bahasa_inggris" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="ketrampilan_internet_" class="col-sm-2 control-label">Ketrampilan Internet  
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_internet_" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_internet_" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_internet_" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_internet_" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_internet_" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="ketrampilan_komputer" class="col-sm-2 control-label">Ketrampilan Komputer 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_komputer" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_komputer" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_komputer" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_komputer" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_komputer" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="berpikir_kritis_" class="col-sm-2 control-label">Berpikir Kritis  
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="berpikir_kritis_" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="berpikir_kritis_" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="berpikir_kritis_" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="berpikir_kritis_" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="berpikir_kritis_" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="ketrampilan_riset" class="col-sm-2 control-label">Ketrampilan Riset 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_riset" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_riset" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_riset" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_riset" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="ketrampilan_riset" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="kemampuan_belajar" class="col-sm-2 control-label">Kemampuan Belajar 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_belajar" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_belajar" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_belajar" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_belajar" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_belajar" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="kemampuan_berkomunikasi" class="col-sm-2 control-label">Kemampuan Berkomunikasi 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="bekerja_di_bawah_tekanan" class="col-sm-2 control-label">Bekerja Di Bawah Tekanan 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="manajemen_waktu" class="col-sm-2 control-label">Manajemen Waktu 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="manajemen_waktu" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="manajemen_waktu" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="manajemen_waktu" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="manajemen_waktu" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="manajemen_waktu" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="bekerja_secara_mandiri" class="col-sm-2 control-label">Bekerja Secara Mandiri 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_secara_mandiri" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_secara_mandiri" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_secara_mandiri" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_secara_mandiri" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_secara_mandiri" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" class="col-sm-2 control-label">Bekerja Dalam Tim/bekerjasama Dengan Orang Lain 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="kemampuan_dalam_memecahkan_masalah" class="col-sm-2 control-label">Kemampuan Dalam Memecahkan Masalah 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="negosiasi_" class="col-sm-2 control-label">Negosiasi  
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="negosiasi_" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="negosiasi_" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="negosiasi_" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="negosiasi_" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="negosiasi_" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="kemampuan_untuk_terus_belajar_sepanjang_hayat" class="col-sm-2 control-label">Kemampuan Untuk Terus Belajar Sepanjang Hayat 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="1" > 1            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="2" > 2            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="3" > 3            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="4" > 4            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="5" > 5            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>
 
<div class="form-group  wrapper-options-crud">
    <label for="input" class="col-sm-2 control-label">Input 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="input" value="1" > 1            </label>
            </div>
            </select>
        <div class="row-fluid clear-both">
        <small class="info help-block">
        </small>
        </div>
    </div>
</div>


<div class="row col-sm-12 message">
</div>
<div class="col-sm-2">
</div>
<div class="col-sm-8 padding-left-0">
    <button class="btn btn-flat btn-primary btn_save" id="btn_save" data-stype='stay'>
    Submit
    </button>
    <span class="loading loading-hide">
    <img src="http://localhost:80/TracerStudySTTGarut/asset//img/loading-spin-primary.svg"> 
    <i>Loading, Submitting data</i>
    </span>
</div>
</form></div>


<!-- Page script -->
<script>
    $(document).ready(function(){
          $('.form-preview').submit(function(){
        return false;
     });

     $('input[type="checkbox"].flat-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
     });


    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_form_formtracer = $('#form_form_formtracer');
        var data_post = form_form_formtracer.serializeArray();
        var save_type = $(this).attr('data-stype');
    
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + 'form/form_formtracer/submit',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            resetForm();
            $('.chosen option').prop('selected', false).trigger('chosen:updated');
                
          } else {
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('html, body').animate({ scrollTop: $(document).height() }, 1000);
        });
    
        return false;
      }); /*end btn save*/


      
             
           
    }); /*end doc ready*/
</script>