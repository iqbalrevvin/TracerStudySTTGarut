
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
    function domo(){
     
       // Binding keys
       $('*').bind('keydown', 'Ctrl+s', function assets() {
          $('#btn_save').trigger('click');
           return false;
       });
    
       $('*').bind('keydown', 'Ctrl+x', function assets() {
          $('#btn_cancel').trigger('click');
           return false;
       });
    
      $('*').bind('keydown', 'Ctrl+d', function assets() {
          $('.btn_save_back').trigger('click');
           return false;
       });
        
    }
    
    jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        FormTracer        <small><?= cclang('update'); ?> FormTracer</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/form_formtracer'); ?>">FormTracer</a></li>
        <li class="active"><?= cclang('update'); ?></li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row" >
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-body ">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header ">
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">FormTracer</h3>
                            <h5 class="widget-user-desc">Edit FormTracer</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/form_formtracer/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_form_formtracer', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_form_formtracer', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="nomor_mahasiswa" class="col-sm-2 control-label">Nomor Mahasiswa 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nomor_mahasiswa" value="<?= set_value('nomor_mahasiswa', $form_formtracer->nomor_mahasiswa); ?>" id="nomor_mahasiswa" placeholder=""  >
                                <small class="info help-block">
                                <b>Input Nomor Mahasiswa</b> Max Length : 7.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="kode_pt" class="col-sm-2 control-label">Kode PT 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="kode_pt" value="<?= set_value('kode_pt', $form_formtracer->kode_pt); ?>" id="kode_pt" placeholder=""  >
                                <small class="info help-block">
                                <b>Format Kode PT must</b> Valid Number,  <b>Input Kode PT</b> Max Length : 6.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="tahun_lulus" class="col-sm-2 control-label">Tahun Lulus 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="tahun_lulus" value="<?= set_value('tahun_lulus', $form_formtracer->tahun_lulus); ?>" id="tahun_lulus" placeholder=""  >
                                <small class="info help-block">
                                <b>Input Tahun Lulus</b> Max Length : 4.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="kode_prodi" class="col-sm-2 control-label">Kode Prodi 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="kode_prodi" value="<?= set_value('kode_prodi', $form_formtracer->kode_prodi); ?>" id="kode_prodi" placeholder=""  >
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="nama" class="col-sm-2 control-label">Nama 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" value="<?= set_value('nama', $form_formtracer->nama); ?>" id="nama" placeholder=""  >
                                <small class="info help-block">
                                <b>Input Nama</b> Max Length : 25.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="nomor_telephone_handphone" class="col-sm-2 control-label">Nomor Telephone/ Handphone 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="nomor_telephone_handphone" value="<?= set_value('nomor_telephone_handphone', $form_formtracer->nomor_telephone_handphone); ?>" id="nomor_telephone_handphone" placeholder=""  >
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="alamat_email" class="col-sm-2 control-label">Alamat Email 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="alamat_email" value="<?= set_value('alamat_email', $form_formtracer->alamat_email); ?>" id="alamat_email" placeholder=""  >
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group  wrapper-options-crud">
                            <label for="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" class="col-sm-2 control-label">Waktu Yang Dihabiskan Untuk Memeproleh Pekerjaan 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 1-3 Bulan Sebelum LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 1-3 Bulan Sebelum LULUS UJIAN" > Kira-kira 1-3 Bulan Sebelum LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 4-6 Bulan Sebelum LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 4-6 Bulan Sebelum LULUS UJIAN" > Kira-kira 4-6 Bulan Sebelum LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 6-9 Bulan Sebelum LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 6-9 Bulan Sebelum LULUS UJIAN" > Kira-kira 6-9 Bulan Sebelum LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 9-12 Bulan Sebelum LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 9-12 Bulan Sebelum LULUS UJIAN" > Kira-kira 9-12 Bulan Sebelum LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN" > Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 1-3 Bulan Sesudah LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 1-3 Bulan Sesudah LULUS UJIAN" > Kira-kira 1-3 Bulan Sesudah LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 4-6 Bulan Sesudah LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 4-6 Bulan Sesudah LULUS UJIAN" > Kira-kira 4-6 Bulan Sesudah LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 6-9 Bulan Sesudah LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 6-9 Bulan Sesudah LULUS UJIAN" > Kira-kira 6-9 Bulan Sesudah LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 9-12 Bulan Sesudah LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 9-12 Bulan Sesudah LULUS UJIAN" > Kira-kira 9-12 Bulan Sesudah LULUS UJIAN                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan == "Kira-kira 1 Tahun Sesudah LULUS UJIAN" ? "checked" : ""; ?> type="radio" class="flat-red" name="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan" value="Kira-kira 1 Tahun Sesudah LULUS UJIAN" > Kira-kira 1 Tahun Sesudah LULUS UJIAN                                    </label>
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
                                    <option <?= $form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_ == "[1] Biaya Sendiri" ? 'selected' :''; ?> value="[1] Biaya Sendiri">[1] Biaya Sendiri</option>
                                    <option <?= $form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_ == "[2] Keluarga" ? 'selected' :''; ?> value="[2] Keluarga">[2] Keluarga</option>
                                    <option <?= $form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_ == "[3] Beasiswa ADIK" ? 'selected' :''; ?> value="[3] Beasiswa ADIK">[3] Beasiswa ADIK</option>
                                    <option <?= $form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_ == "[4] Beasiswa Bidikmisi" ? 'selected' :''; ?> value="[4] Beasiswa Bidikmisi">[4] Beasiswa Bidikmisi</option>
                                    <option <?= $form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_ == "[5] Beasiswa AFIRMASI" ? 'selected' :''; ?> value="[5] Beasiswa AFIRMASI">[5] Beasiswa AFIRMASI</option>
                                    <option <?= $form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_ == "[6] Beasiswa Perusahaan Negeri" ? 'selected' :''; ?> value="[6] Beasiswa Perusahaan Negeri">[6] Beasiswa Perusahaan Negeri</option>
                                    <option <?= $form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_ == "[7] Beasiswa Perusahaan Swasta" ? 'selected' :''; ?> value="[7] Beasiswa Perusahaan Swasta">[7] Beasiswa Perusahaan Swasta</option>
                                    <option <?= $form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_ == "[8] Lainnya. . . " ? 'selected' :''; ?> value="[8] Lainnya. . . ">[8] Lainnya. . . </option>
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
                                        <input type="radio" class="flat-red" name="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_" id="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_"  value="yes" <?= $form_formtracer->sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_ == "yes" ? "checked" : ""; ?> >
                                        <?= cclang('yes'); ?>
                                    </label>
                                </div>
                                <div class="col-md-14">
                                    <label>
                                        <input type="radio" class="flat-red" name="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_" id="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_"  value="no" <?= $form_formtracer->sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_ == "no" ? "checked" : ""; ?> >
                                        <?= cclang('no'); ?>
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
                                    <input <?= $form_formtracer->hubungan_antara_bidang_studi_dengan_pekerjaan_anda_ == "Sangat Erat" ? "checked" : ""; ?> type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Sangat Erat" > Sangat Erat                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->hubungan_antara_bidang_studi_dengan_pekerjaan_anda_ == "Erat" ? "checked" : ""; ?> type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Erat" > Erat                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->hubungan_antara_bidang_studi_dengan_pekerjaan_anda_ == "Cukup Erat" ? "checked" : ""; ?> type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Cukup Erat" > Cukup Erat                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->hubungan_antara_bidang_studi_dengan_pekerjaan_anda_ == "Kurang erat" ? "checked" : ""; ?> type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Kurang erat" > Kurang erat                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->hubungan_antara_bidang_studi_dengan_pekerjaan_anda_ == "Tidak Sama Sekali" ? "checked" : ""; ?> type="radio" class="flat-red" name="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_" value="Tidak Sama Sekali" > Tidak Sama Sekali                                    </label>
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
                                    <input <?= $form_formtracer->tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_ == "Setingkat Lebih Tinggi" ? "checked" : ""; ?> type="radio" class="flat-red" name="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" value="Setingkat Lebih Tinggi" > Setingkat Lebih Tinggi                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_ == "Tingkat Yg Sama" ? "checked" : ""; ?> type="radio" class="flat-red" name="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" value="Tingkat Yg Sama" > Tingkat Yg Sama                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_ == "Setingkat Lebih Rendah" ? "checked" : ""; ?> type="radio" class="flat-red" name="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" value="Setingkat Lebih Rendah" > Setingkat Lebih Rendah                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_ == "Tidak Perlu Pendidikan Tinggi" ? "checked" : ""; ?> type="radio" class="flat-red" name="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_" value="Tidak Perlu Pendidikan Tinggi" > Tidak Perlu Pendidikan Tinggi                                    </label>
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
                                <input type="text" class="form-control" name="kira_kira_berapa_pendapatan_anda_setiap_bulannya_" value="<?= set_value('kira_kira_berapa_pendapatan_anda_setiap_bulannya_', $form_formtracer->kira_kira_berapa_pendapatan_anda_setiap_bulannya_); ?>" id="kira_kira_berapa_pendapatan_anda_setiap_bulannya_" placeholder="Isi Dengan Angka Saja Tanpa Titik/Koma"  test = "test" >
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
                                    <input <?= $form_formtracer->perkuliahan == "Sangat Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="perkuliahan" value="Sangat Besar" > Sangat Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->perkuliahan == "Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="perkuliahan" value="Besar" > Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->perkuliahan == "Cukup Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="perkuliahan" value="Cukup Besar" > Cukup Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->perkuliahan == "Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="perkuliahan" value="Kurang" > Kurang                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->perkuliahan == "Tidak Sama Sekali" ? "checked" : ""; ?> type="radio" class="flat-red" name="perkuliahan" value="Tidak Sama Sekali" > Tidak Sama Sekali                                    </label>
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
                                    <input <?= $form_formtracer->desmonstrasi == "Sangat Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="desmonstrasi" value="Sangat Besar" > Sangat Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->desmonstrasi == "Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="desmonstrasi" value="Besar" > Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->desmonstrasi == "Cukup Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="desmonstrasi" value="Cukup Besar" > Cukup Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->desmonstrasi == "Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="desmonstrasi" value="Kurang" > Kurang                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->desmonstrasi == "Tidak Sama Sekali" ? "checked" : ""; ?> type="radio" class="flat-red" name="desmonstrasi" value="Tidak Sama Sekali" > Tidak Sama Sekali                                    </label>
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
                                    <input <?= $form_formtracer->partisipasi_dalam_proyek_riset == "Sangat Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Sangat Besar" > Sangat Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->partisipasi_dalam_proyek_riset == "Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Besar" > Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->partisipasi_dalam_proyek_riset == "Cukup Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Cukup Besar" > Cukup Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->partisipasi_dalam_proyek_riset == "Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Kurang" > Kurang                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->partisipasi_dalam_proyek_riset == "Tidak Sama Sekali" ? "checked" : ""; ?> type="radio" class="flat-red" name="partisipasi_dalam_proyek_riset" value="Tidak Sama Sekali" > Tidak Sama Sekali                                    </label>
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
                                    <input <?= $form_formtracer->magang == "Sangat Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="magang" value="Sangat Besar" > Sangat Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->magang == "Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="magang" value="Besar" > Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->magang == "Cukup Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="magang" value="Cukup Besar" > Cukup Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->magang == "Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="magang" value="Kurang" > Kurang                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->magang == "Tidak Sama Sekali" ? "checked" : ""; ?> type="radio" class="flat-red" name="magang" value="Tidak Sama Sekali" > Tidak Sama Sekali                                    </label>
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
                                    <input <?= $form_formtracer->praktikum == "Sangat Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="praktikum" value="Sangat Besar" > Sangat Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->praktikum == "Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="praktikum" value="Besar" > Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->praktikum == "Cukup Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="praktikum" value="Cukup Besar" > Cukup Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->praktikum == "Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="praktikum" value="Kurang" > Kurang                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->praktikum == "Tidak Sama Sekali" ? "checked" : ""; ?> type="radio" class="flat-red" name="praktikum" value="Tidak Sama Sekali" > Tidak Sama Sekali                                    </label>
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
                                    <input <?= $form_formtracer->kerja_lapangan == "Sangat Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="kerja_lapangan" value="Sangat Besar" > Sangat Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kerja_lapangan == "Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="kerja_lapangan" value="Besar" > Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kerja_lapangan == "Cukup Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="kerja_lapangan" value="Cukup Besar" > Cukup Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kerja_lapangan == "Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="kerja_lapangan" value="Kurang" > Kurang                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kerja_lapangan == "Tidak Sama Sekali" ? "checked" : ""; ?> type="radio" class="flat-red" name="kerja_lapangan" value="Tidak Sama Sekali" > Tidak Sama Sekali                                    </label>
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
                                    <input <?= $form_formtracer->diskusi == "Sangat Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="diskusi" value="Sangat Besar" > Sangat Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->diskusi == "Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="diskusi" value="Besar" > Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->diskusi == "Cukup Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="diskusi" value="Cukup Besar" > Cukup Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->diskusi == "Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="diskusi" value="Kurang" > Kurang                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->diskusi == "Tidak Sama Sekali" ? "checked" : ""; ?> type="radio" class="flat-red" name="diskusi" value="Tidak Sama Sekali" > Tidak Sama Sekali                                    </label>
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
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 1-3 bulan Sebelum Lulus" ? 'selected' :''; ?> value="Kira-kira 1-3 bulan Sebelum Lulus">Kira-kira 1-3 bulan Sebelum Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 3-6 bulan Sebelum Lulus" ? 'selected' :''; ?> value="Kira-kira 3-6 bulan Sebelum Lulus">Kira-kira 3-6 bulan Sebelum Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 6-9 bulan Sebelum Lulus" ? 'selected' :''; ?> value="Kira-kira 6-9 bulan Sebelum Lulus">Kira-kira 6-9 bulan Sebelum Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 9-12 bulan Sebelum Lulus" ? 'selected' :''; ?> value="Kira-kira 9-12 bulan Sebelum Lulus">Kira-kira 9-12 bulan Sebelum Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 1 Tahun Lebih Sebelum Lulus" ? 'selected' :''; ?> value="Kira-kira 1 Tahun Lebih Sebelum Lulus"></option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 1-3 bulan Sesudah Lulus" ? 'selected' :''; ?> value="Kira-kira 1-3 bulan Sesudah Lulus">Kira-kira 1-3 bulan Sesudah Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 3-6 bulan Sesudah Lulus" ? 'selected' :''; ?> value="Kira-kira 3-6 bulan Sesudah Lulus">Kira-kira 3-6 bulan Sesudah Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 6-9 bulan Sesudah Lulus" ? 'selected' :''; ?> value="Kira-kira 6-9 bulan Sesudah Lulus">Kira-kira 6-9 bulan Sesudah Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 9-12 bulan Sesudah Lulus" ? 'selected' :''; ?> value="Kira-kira 9-12 bulan Sesudah Lulus">Kira-kira 9-12 bulan Sesudah Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Kira-kira 1 Tahun Lebih Sesudah Lulus" ? 'selected' :''; ?> value="Kira-kira 1 Tahun Lebih Sesudah Lulus">Kira-kira 1 Tahun Lebih Sesudah Lulus</option>
                                    <option <?= $form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_ == "Saya Tidak Mencari Pekerjaan" ? 'selected' :''; ?> value="Saya Tidak Mencari Pekerjaan">Saya Tidak Mencari Pekerjaan</option>
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
                                    <option  <?= in_array('Saya Tidak Mencari Pekerjaan Sebelumnya', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Saya Tidak Mencari Pekerjaan Sebelumnya">Saya Tidak Mencari Pekerjaan Sebelumnya</option>
                                    <option  <?= in_array('Melalui iklan di koran/majalah, brosur', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Melalui iklan di koran/majalah, brosur">Melalui iklan di koran/majalah, brosur</option>
                                    <option  <?= in_array('Melamar ke perusahaan tanpa mengetahui lowongan yang ada', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Melamar ke perusahaan tanpa mengetahui lowongan yang ada">Melamar ke perusahaan tanpa mengetahui lowongan yang ada</option>
                                    <option  <?= in_array('Pergi ke bursa/pameran kerja', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Pergi ke bursa/pameran kerja">Pergi ke bursa/pameran kerja</option>
                                    <option  <?= in_array('Mencari lewat internet/iklan online/milis', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Mencari lewat internet/iklan online/milis">Mencari lewat internet/iklan online/milis</option>
                                    <option  <?= in_array('Dihubungi oleh perusahaan', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Dihubungi oleh perusahaan">Dihubungi oleh perusahaan</option>
                                    <option  <?= in_array('Menghubungi Kemenakertrans', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Menghubungi Kemenakertrans">Menghubungi Kemenakertrans</option>
                                    <option  <?= in_array('Menghubungi agen tenaga kerja komersial/swasta', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Menghubungi agen tenaga kerja komersial/swasta">Menghubungi agen tenaga kerja komersial/swasta</option>
                                    <option  <?= in_array('Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas">Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas</option>
                                    <option  <?= in_array('Menghubungi kantor kemahasiswaan/hubungan alumni', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Menghubungi kantor kemahasiswaan/hubungan alumni">Menghubungi kantor kemahasiswaan/hubungan alumni</option>
                                    <option  <?= in_array('Membangun jejaring (network) sejak masih kuliah', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Membangun jejaring (network) sejak masih kuliah">Membangun jejaring (network) sejak masih kuliah</option>
                                    <option  <?= in_array('Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)</option>
                                    <option  <?= in_array('Membangun bisnis sendiri', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Membangun bisnis sendiri">Membangun bisnis sendiri</option>
                                    <option  <?= in_array('Melalui penempatan kerja atau magang  ', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Melalui penempatan kerja atau magang  ">Melalui penempatan kerja atau magang  </option>
                                    <option  <?= in_array('Bekerja di tempat yang sama dengan tempat kerja semasa kuliah', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah">Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</option>
                                    <option  <?= in_array('Lainnya', explode(',', $form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Lainnya">Lainnya</option>
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
                                <input type="number" class="form-control" name="berapa_perusahaan_yang_dilamar_lewat_surat_email_" value="<?= set_value('berapa_perusahaan_yang_dilamar_lewat_surat_email_', $form_formtracer->berapa_perusahaan_yang_dilamar_lewat_surat_email_); ?>" id="berapa_perusahaan_yang_dilamar_lewat_surat_email_" placeholder=""  >
                                <small class="info help-block">
                                Isi dengan jumlah perusahaan yang anda lamar sebelum anda memeroleh pekerjaan pertama?</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="_jumlah_perusahaan_yang_merespons_lamaran_anda_" class="col-sm-2 control-label"> Jumlah Perusahaan Yang Merespons Lamaran Anda? 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="_jumlah_perusahaan_yang_merespons_lamaran_anda_" value="<?= set_value('_jumlah_perusahaan_yang_merespons_lamaran_anda_', $form_formtracer->_jumlah_perusahaan_yang_merespons_lamaran_anda_); ?>" id="_jumlah_perusahaan_yang_merespons_lamaran_anda_" placeholder=""  >
                                <small class="info help-block">
                                Isi dengan jumlah perusahaan/instansi/institusi yang merespons lamaran anda?</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_" class="col-sm-2 control-label">Jumlah Perusahaan Yang Mengundang Anda Untuk Wawancara? 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_" value="<?= set_value('jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_', $form_formtracer->jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_); ?>" id="jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_" placeholder=""  >
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
                                    <option  <?= in_array('Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana', explode(',', $form_formtracer->bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana">Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana</option>
                                    <option  <?= in_array('Saya menikah', explode(',', $form_formtracer->bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Saya menikah">Saya menikah</option>
                                    <option  <?= in_array('Saya sibuk dengan keluarga dan anak-anak ', explode(',', $form_formtracer->bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Saya sibuk dengan keluarga dan anak-anak ">Saya sibuk dengan keluarga dan anak-anak </option>
                                    <option  <?= in_array('Saya sekarang sedang mencari pekerjaan', explode(',', $form_formtracer->bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Saya sekarang sedang mencari pekerjaan">Saya sekarang sedang mencari pekerjaan</option>
                                    <option  <?= in_array('Lainnya ', explode(',', $form_formtracer->bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu)) ? 'selected' : ''; ?>  value="Lainnya ">Lainnya </option>
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
                                    <option <?= $form_formtracer->apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_ == "Saya Sudah Bekerja" ? 'selected' :''; ?> value="Saya Sudah Bekerja">Saya Sudah Bekerja</option>
                                    <option <?= $form_formtracer->apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_ == "Saya Sudah Menikah" ? 'selected' :''; ?> value="Saya Sudah Menikah">saya Sudah Menikah</option>
                                    <option <?= $form_formtracer->apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_ == "Saya Sibuk Dengan Keluarga dan Anak-anak" ? 'selected' :''; ?> value="Saya Sibuk Dengan Keluarga dan Anak-anak">Saya Sibuk Dengan Keluarga dan Anak-anak</option>
                                    <option <?= $form_formtracer->apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_ == "Saya Sekarang Sedang Mencari Pekerjaan" ? 'selected' :''; ?> value="Saya Sekarang Sedang Mencari Pekerjaan">Saya Sekarang Sedang Mencari Pekerjaan</option>
                                    <option <?= $form_formtracer->apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_ == "Lainnya" ? 'selected' :''; ?> value="Lainnya">Lainnya</option>
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
                                    <option <?= $form_formtracer->apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_ == "Instansi pemerintah(termasuk BUMN)" ? 'selected' :''; ?> value="Instansi pemerintah(termasuk BUMN)">Instansi pemerintah(termasuk BUMN)</option>
                                    <option <?= $form_formtracer->apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_ == "Organisasi non-profit/Lembaga Swadaya Masyarakat" ? 'selected' :''; ?> value="Organisasi non-profit/Lembaga Swadaya Masyarakat">Organisasi non-profit/Lembaga Swadaya Masyarakat</option>
                                    <option <?= $form_formtracer->apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_ == "Perusahaan Swasta" ? 'selected' :''; ?> value="Perusahaan Swasta">Perusahaan Swasta</option>
                                    <option <?= $form_formtracer->apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_ == "Wiraswasta/Perusahaan Sendiri" ? 'selected' :''; ?> value="Wiraswasta/Perusahaan Sendiri">Wiraswasta/Perusahaan Sendiri</option>
                                    <option <?= $form_formtracer->apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_ == "Lembaga Pendidikan/Sekolah" ? 'selected' :''; ?> value="Lembaga Pendidikan/Sekolah">Lembaga Pendidikan/Sekolah</option>
                                    <option <?= $form_formtracer->apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_ == "Lainnya" ? 'selected' :''; ?> value="Lainnya">Lainnya</option>
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
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya" ? 'selected' :''; ?> value="Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya">Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Saya belum mendapatkan pekerjaan yang lebih sesuai" ? 'selected' :''; ?> value="Saya belum mendapatkan pekerjaan yang lebih sesuai">Saya belum mendapatkan pekerjaan yang lebih sesuai</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Di pekerjaan ini saya memeroleh prospek karir yang baik" ? 'selected' :''; ?> value="Di pekerjaan ini saya memeroleh prospek karir yang baik">Di pekerjaan ini saya memeroleh prospek karir yang baik</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya" ? 'selected' :''; ?> value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya">Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" ? 'selected' :''; ?> value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya">Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini." ? 'selected' :''; ?> value="Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.">Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Pekerjaan saya saat ini lebih aman/terjamin/secure" ? 'selected' :''; ?> value="Pekerjaan saya saat ini lebih aman/terjamin/secure">Pekerjaan saya saat ini lebih aman/terjamin/secure</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Pekerjaan saya saat ini lebih menarik" ? 'selected' :''; ?> value="Pekerjaan saya saat ini lebih menarik">Pekerjaan saya saat ini lebih menarik</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll" ? 'selected' :''; ?> value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll">Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya." ? 'selected' :''; ?> value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.">Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" ? 'selected' :''; ?> value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya">Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya." ? 'selected' :''; ?> value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.">Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.</option>
                                    <option <?= $form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_ == "Lainnya" ? 'selected' :''; ?> value="Lainnya">Lainnya</option>
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
                                    <input <?= $form_formtracer->pengetahuan_di_bidang_atau_disiplin_ilmu_anda == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_di_bidang_atau_disiplin_ilmu_anda == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_di_bidang_atau_disiplin_ilmu_anda == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_di_bidang_atau_disiplin_ilmu_anda == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_di_bidang_atau_disiplin_ilmu_anda == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_bidang_atau_disiplin_ilmu_anda" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->pengetahuan_umum == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_umum" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_umum == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_umum" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_umum == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_umum" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_umum == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_umum" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->pengetahuan_umum == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="pengetahuan_umum" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->bahasa_inggris == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="bahasa_inggris" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bahasa_inggris == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="bahasa_inggris" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bahasa_inggris == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="bahasa_inggris" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bahasa_inggris == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="bahasa_inggris" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bahasa_inggris == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="bahasa_inggris" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->ketrampilan_internet_ == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_internet_" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_internet_ == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_internet_" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_internet_ == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_internet_" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_internet_ == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_internet_" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_internet_ == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_internet_" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->ketrampilan_komputer == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_komputer" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_komputer == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_komputer" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_komputer == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_komputer" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_komputer == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_komputer" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_komputer == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_komputer" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->berpikir_kritis_ == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="berpikir_kritis_" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->berpikir_kritis_ == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="berpikir_kritis_" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->berpikir_kritis_ == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="berpikir_kritis_" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->berpikir_kritis_ == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="berpikir_kritis_" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->berpikir_kritis_ == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="berpikir_kritis_" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->ketrampilan_riset == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_riset" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_riset == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_riset" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_riset == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_riset" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_riset == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_riset" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->ketrampilan_riset == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="ketrampilan_riset" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->kemampuan_belajar == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_belajar" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_belajar == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_belajar" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_belajar == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_belajar" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_belajar == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_belajar" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_belajar == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_belajar" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->kemampuan_berkomunikasi == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_berkomunikasi == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_berkomunikasi == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_berkomunikasi == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_berkomunikasi == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_berkomunikasi" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->bekerja_di_bawah_tekanan == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_di_bawah_tekanan == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_di_bawah_tekanan == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_di_bawah_tekanan == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_di_bawah_tekanan == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_di_bawah_tekanan" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->manajemen_waktu == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="manajemen_waktu" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->manajemen_waktu == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="manajemen_waktu" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->manajemen_waktu == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="manajemen_waktu" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->manajemen_waktu == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="manajemen_waktu" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->manajemen_waktu == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="manajemen_waktu" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->bekerja_secara_mandiri == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_secara_mandiri" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_secara_mandiri == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_secara_mandiri" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_secara_mandiri == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_secara_mandiri" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_secara_mandiri == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_secara_mandiri" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_secara_mandiri == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_secara_mandiri" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->bekerja_dalam_tim_bekerjasama_dengan_orang_lain == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_dalam_tim_bekerjasama_dengan_orang_lain == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_dalam_tim_bekerjasama_dengan_orang_lain == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_dalam_tim_bekerjasama_dengan_orang_lain == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->bekerja_dalam_tim_bekerjasama_dengan_orang_lain == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="bekerja_dalam_tim_bekerjasama_dengan_orang_lain" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->kemampuan_dalam_memecahkan_masalah == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_dalam_memecahkan_masalah == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_dalam_memecahkan_masalah == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_dalam_memecahkan_masalah == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_dalam_memecahkan_masalah == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_dalam_memecahkan_masalah" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->negosiasi_ == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="negosiasi_" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->negosiasi_ == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="negosiasi_" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->negosiasi_ == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="negosiasi_" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->negosiasi_ == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="negosiasi_" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->negosiasi_ == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="negosiasi_" value="5" > 5                                    </label>
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
                                    <input <?= $form_formtracer->kemampuan_untuk_terus_belajar_sepanjang_hayat == "1" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="1" > 1                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_untuk_terus_belajar_sepanjang_hayat == "2" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="2" > 2                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_untuk_terus_belajar_sepanjang_hayat == "3" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="3" > 3                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_untuk_terus_belajar_sepanjang_hayat == "4" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="4" > 4                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->kemampuan_untuk_terus_belajar_sepanjang_hayat == "5" ? "checked" : ""; ?> type="radio" class="flat-red" name="kemampuan_untuk_terus_belajar_sepanjang_hayat" value="5" > 5                                    </label>
                                    </div>
                                    </select>
                                <div class="row-fluid clear-both">
                                <small class="info help-block">
                                </small>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="message"></div>
                        <div class="row-fluid col-md-7">
                            <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                            <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                            </button>
                            <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                            <i class="ion ion-ios-list-outline" ></i> <?= cclang('save_and_go_the_list_button'); ?>
                            </a>
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="cancel (Ctrl+x)">
                            <i class="fa fa-undo" ></i> <?= cclang('cancel_button'); ?>
                            </a>
                            <span class="loading loading-hide">
                            <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
                            <i><?= cclang('loading_field_data'); ?></i>
                            </span>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
                <!--/box body -->
            </div>
            <!--/box -->
        </div>
    </div>
</section>
<!-- /.content -->
<!-- Page script -->
<script>
    $(document).ready(function(){
      
             
      $('#btn_cancel').click(function(){
        swal({
            title: "Are you sure?",
            text: "the data that you have created will be in the exhaust!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            cancelButtonText: "No!",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
              window.location.href = BASE_URL + 'administrator/form_formtracer';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_form_formtracer = $('#form_form_formtracer');
        var data_post = form_form_formtracer.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_form_formtracer.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            var id = $('#form_formtracer_image_galery').find('li').attr('qq-file-id');
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            $('.data_file_uuid').val('');
    
          } else {
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
    
        return false;
      }); /*end btn save*/
      
           
    
    }); /*end doc ready*/
</script>