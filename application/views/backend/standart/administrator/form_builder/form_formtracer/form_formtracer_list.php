
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/Form_formtracer/add';
       return false;
   });

   $('*').bind('keydown', 'Ctrl+f', function assets() {
       $('#sbtn').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
       $('#reset').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+b', function assets() {

       $('#reset').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      FormTracer<small><?= cclang('list_all'); ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">FormTracer</li>
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
                     <div class="row pull-right">
                        <?php is_allowed('form_formtracer_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export', 'Form Formtracer'); ?>" href="<?= site_url('administrator/form_formtracer/export'); ?>"><i class="fa fa-file-excel-o" ></i> <?= cclang('export'); ?></a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">FormTracer</h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', 'FormTracer'); ?>  <i class="label bg-yellow"><?= $form_formtracer_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_form_formtracer" id="form_form_formtracer" action="<?= base_url('administrator/form_formtracer/index'); ?>">
                  
                  <div class="table-responsive">
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <th>Nomor Mahasiswa</th>
                           <th>Kode Pt</th>
                           <th>Tahun Lulus</th>
                           <th>Kode Prodi</th>
                           <th>Nama</th>
                           <th>Nomor Telephone Handphone</th>
                           <th>Alamat Email</th>
                           <th>Waktu Yang Dihabiskan Untuk Memeproleh Pekerjaan</th>
                           <th>Sebutkan Sumberdana Dalam Pembiayaan Kuliah </th>
                           <th>Sedang Bekerja Termasuk Kerja Sambilan Dan Wirausaha </th>
                           <th>Hubungan Antara Bidang Studi Dengan Pekerjaan Anda </th>
                           <th>Tingkat Pendidikan Yang Tepat Sesuai Untuk Pekerjaan Saat Ini </th>
                           <th>Kira Kira Berapa Pendapatan Anda Setiap Bulannya </th>
                           <th>Perkuliahan</th>
                           <th>Desmonstrasi</th>
                           <th>Partisipasi Dalam Proyek Riset</th>
                           <th>Magang</th>
                           <th>Praktikum</th>
                           <th>Kerja Lapangan</th>
                           <th>Diskusi</th>
                           <th>Mulai Mencari Pekerjaan Pekerjaan Sambilan Tidak Dimasukan </th>
                           <th>Bagaimana Cara Pekerjaan Tersebut Jawaban Bisa Lebih Dari Satu</th>
                           <th>Berapa Perusahaan Yang Dilamar Lewat Surat Email </th>
                           <th> Jumlah Perusahaan Yang Merespons Lamaran Anda </th>
                           <th>Jumlah Perusahaan Yang Mengundang Anda Untuk Wawancara </th>
                           <th>Bagaimana Situasi Anda Saat Ini Jawaban Bisa Lebih Dari Satu</th>
                           <th>Apakah Anda Aktif Mencari Pekerjaan Dalam 4 Minggu Terkahir </th>
                           <th>Apa Jenis Perusahaan Tempat Anda Bekerja Sekarang </th>
                           <th>Jika Pekerjaan Tidak Sesuai Kenapa Mengambilnya </th>
                           <th>Pengetahuan Di Bidang Atau Disiplin Ilmu Anda</th>
                           <th>Pengetahuan Di Luar Bidang Atau Disiplin Ilmu Anda</th>
                           <th>Pengetahuan Umum</th>
                           <th>Bahasa Inggris</th>
                           <th>Ketrampilan Internet </th>
                           <th>Ketrampilan Komputer</th>
                           <th>Berpikir Kritis </th>
                           <th>Ketrampilan Riset</th>
                           <th>Kemampuan Belajar</th>
                           <th>Kemampuan Berkomunikasi</th>
                           <th>Bekerja Di Bawah Tekanan</th>
                           <th>Manajemen Waktu</th>
                           <th>Bekerja Secara Mandiri</th>
                           <th>Bekerja Dalam Tim Bekerjasama Dengan Orang Lain</th>
                           <th>Kemampuan Dalam Memecahkan Masalah</th>
                           <th>Negosiasi </th>
                           <th>Kemampuan Untuk Terus Belajar Sepanjang Hayat</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_form_formtracer">
                     <?php foreach($form_formtracers as $form_formtracer): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $form_formtracer->id; ?>">
                           </td>
                           <td><?= _ent($form_formtracer->nomor_mahasiswa); ?></td> 
                           <td><?= _ent($form_formtracer->kode_pt); ?></td> 
                           <td><?= _ent($form_formtracer->tahun_lulus); ?></td> 
                           <td><?= _ent($form_formtracer->kode_prodi); ?></td> 
                           <td><?= _ent($form_formtracer->nama); ?></td> 
                           <td><?= _ent($form_formtracer->nomor_telephone_handphone); ?></td> 
                           <td><?= _ent($form_formtracer->alamat_email); ?></td> 
                           <td><?= _ent($form_formtracer->waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan); ?></td> 
                           <td><?= _ent($form_formtracer->sebutkan_sumberdana_dalam_pembiayaan_kuliah_); ?></td> 
                           <td><?= _ent($form_formtracer->sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_); ?></td> 
                           <td><?= _ent($form_formtracer->hubungan_antara_bidang_studi_dengan_pekerjaan_anda_); ?></td> 
                           <td><?= _ent($form_formtracer->tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_); ?></td> 
                           <td><?= _ent($form_formtracer->kira_kira_berapa_pendapatan_anda_setiap_bulannya_); ?></td> 
                           <td><?= _ent($form_formtracer->perkuliahan); ?></td> 
                           <td><?= _ent($form_formtracer->desmonstrasi); ?></td> 
                           <td><?= _ent($form_formtracer->partisipasi_dalam_proyek_riset); ?></td> 
                           <td><?= _ent($form_formtracer->magang); ?></td> 
                           <td><?= _ent($form_formtracer->praktikum); ?></td> 
                           <td><?= _ent($form_formtracer->kerja_lapangan); ?></td> 
                           <td><?= _ent($form_formtracer->diskusi); ?></td> 
                           <td><?= _ent($form_formtracer->mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_); ?></td> 
                           <td><?= _ent($form_formtracer->bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu); ?></td> 
                           <td><?= _ent($form_formtracer->berapa_perusahaan_yang_dilamar_lewat_surat_email_); ?></td> 
                           <td><?= _ent($form_formtracer->_jumlah_perusahaan_yang_merespons_lamaran_anda_); ?></td> 
                           <td><?= _ent($form_formtracer->jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_); ?></td> 
                           <td><?= _ent($form_formtracer->bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu); ?></td> 
                           <td><?= _ent($form_formtracer->apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_); ?></td> 
                           <td><?= _ent($form_formtracer->apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_); ?></td> 
                           <td><?= _ent($form_formtracer->jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_); ?></td> 
                           <td><?= _ent($form_formtracer->pengetahuan_di_bidang_atau_disiplin_ilmu_anda); ?></td> 
                           <td><?= _ent($form_formtracer->pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda); ?></td> 
                           <td><?= _ent($form_formtracer->pengetahuan_umum); ?></td> 
                           <td><?= _ent($form_formtracer->bahasa_inggris); ?></td> 
                           <td><?= _ent($form_formtracer->ketrampilan_internet_); ?></td> 
                           <td><?= _ent($form_formtracer->ketrampilan_komputer); ?></td> 
                           <td><?= _ent($form_formtracer->berpikir_kritis_); ?></td> 
                           <td><?= _ent($form_formtracer->ketrampilan_riset); ?></td> 
                           <td><?= _ent($form_formtracer->kemampuan_belajar); ?></td> 
                           <td><?= _ent($form_formtracer->kemampuan_berkomunikasi); ?></td> 
                           <td><?= _ent($form_formtracer->bekerja_di_bawah_tekanan); ?></td> 
                           <td><?= _ent($form_formtracer->manajemen_waktu); ?></td> 
                           <td><?= _ent($form_formtracer->bekerja_secara_mandiri); ?></td> 
                           <td><?= _ent($form_formtracer->bekerja_dalam_tim_bekerjasama_dengan_orang_lain); ?></td> 
                           <td><?= _ent($form_formtracer->kemampuan_dalam_memecahkan_masalah); ?></td> 
                           <td><?= _ent($form_formtracer->negosiasi_); ?></td> 
                           <td><?= _ent($form_formtracer->kemampuan_untuk_terus_belajar_sepanjang_hayat); ?></td> 
                           <td width="200">
                              <?php is_allowed('form_formtracer_view', function() use ($form_formtracer){?>
                              <a href="<?= site_url('administrator/form_formtracer/view/' . $form_formtracer->id); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> <?= cclang('view_button'); ?>
                              <?php }) ?>
                              <?php is_allowed('form_formtracer_update', function() use ($form_formtracer){?>
                              <a href="<?= site_url('administrator/form_formtracer/edit/' . $form_formtracer->id); ?>" class="label-default"><i class="fa fa-edit "></i> <?= cclang('update_button'); ?></a>
                              <?php }) ?>
                              <?php is_allowed('form_formtracer_delete', function() use ($form_formtracer){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/form_formtracer/delete/' . $form_formtracer->id); ?>" class="label-default remove-data"><i class="fa fa-close"></i> <?= cclang('remove_button'); ?></a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($form_formtracer_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                            <?= cclang('data_is_not_avaiable', 'Form FormTracer'); ?>
                           </td>
                         </tr>
                      <?php endif; ?>
                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
               <!-- /.widget-user -->
               <div class="row">
                  <div class="col-md-8">
                     <div class="col-sm-2 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="bulk" id="bulk" placeholder="Site Email" >
                           <option value="">Bulk</option>
                           <option value="delete"><?= cclang('delete'); ?></option>
                        </select>
                     </div>
                     <div class="col-sm-2 padd-left-0 ">
                        <button type="button" class="btn btn-flat" name="apply" id="apply" title="apply bulk actions"><?= cclang('apply_button'); ?></button>
                     </div>
                     <div class="col-sm-3 padd-left-0  " >
                        <input type="text" class="form-control" name="q" id="filter" placeholder="<?= cclang('filter'); ?>" value="<?= $this->input->get('q'); ?>">
                     </div>
                     <div class="col-sm-3 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                           <option value=""><?= cclang('all'); ?></option>
                            <option <?= $this->input->get('f') == 'nomor_mahasiswa' ? 'selected' :''; ?> value="nomor_mahasiswa">Nomor Mahasiswa</option>
                           <option <?= $this->input->get('f') == 'kode_pt' ? 'selected' :''; ?> value="kode_pt">Kode Pt</option>
                           <option <?= $this->input->get('f') == 'tahun_lulus' ? 'selected' :''; ?> value="tahun_lulus">Tahun Lulus</option>
                           <option <?= $this->input->get('f') == 'kode_prodi' ? 'selected' :''; ?> value="kode_prodi">Kode Prodi</option>
                           <option <?= $this->input->get('f') == 'nama' ? 'selected' :''; ?> value="nama">Nama</option>
                           <option <?= $this->input->get('f') == 'nomor_telephone_handphone' ? 'selected' :''; ?> value="nomor_telephone_handphone">Nomor Telephone Handphone</option>
                           <option <?= $this->input->get('f') == 'alamat_email' ? 'selected' :''; ?> value="alamat_email">Alamat Email</option>
                           <option <?= $this->input->get('f') == 'waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan' ? 'selected' :''; ?> value="waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan">Waktu Yang Dihabiskan Untuk Memeproleh Pekerjaan</option>
                           <option <?= $this->input->get('f') == 'sebutkan_sumberdana_dalam_pembiayaan_kuliah_' ? 'selected' :''; ?> value="sebutkan_sumberdana_dalam_pembiayaan_kuliah_">Sebutkan Sumberdana Dalam Pembiayaan Kuliah </option>
                           <option <?= $this->input->get('f') == 'sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_' ? 'selected' :''; ?> value="sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_">Sedang Bekerja Termasuk Kerja Sambilan Dan Wirausaha </option>
                           <option <?= $this->input->get('f') == 'hubungan_antara_bidang_studi_dengan_pekerjaan_anda_' ? 'selected' :''; ?> value="hubungan_antara_bidang_studi_dengan_pekerjaan_anda_">Hubungan Antara Bidang Studi Dengan Pekerjaan Anda </option>
                           <option <?= $this->input->get('f') == 'tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_' ? 'selected' :''; ?> value="tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_">Tingkat Pendidikan Yang Tepat Sesuai Untuk Pekerjaan Saat Ini </option>
                           <option <?= $this->input->get('f') == 'kira_kira_berapa_pendapatan_anda_setiap_bulannya_' ? 'selected' :''; ?> value="kira_kira_berapa_pendapatan_anda_setiap_bulannya_">Kira Kira Berapa Pendapatan Anda Setiap Bulannya </option>
                           <option <?= $this->input->get('f') == 'perkuliahan' ? 'selected' :''; ?> value="perkuliahan">Perkuliahan</option>
                           <option <?= $this->input->get('f') == 'desmonstrasi' ? 'selected' :''; ?> value="desmonstrasi">Desmonstrasi</option>
                           <option <?= $this->input->get('f') == 'partisipasi_dalam_proyek_riset' ? 'selected' :''; ?> value="partisipasi_dalam_proyek_riset">Partisipasi Dalam Proyek Riset</option>
                           <option <?= $this->input->get('f') == 'magang' ? 'selected' :''; ?> value="magang">Magang</option>
                           <option <?= $this->input->get('f') == 'praktikum' ? 'selected' :''; ?> value="praktikum">Praktikum</option>
                           <option <?= $this->input->get('f') == 'kerja_lapangan' ? 'selected' :''; ?> value="kerja_lapangan">Kerja Lapangan</option>
                           <option <?= $this->input->get('f') == 'diskusi' ? 'selected' :''; ?> value="diskusi">Diskusi</option>
                           <option <?= $this->input->get('f') == 'mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_' ? 'selected' :''; ?> value="mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_">Mulai Mencari Pekerjaan Pekerjaan Sambilan Tidak Dimasukan </option>
                           <option <?= $this->input->get('f') == 'bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu' ? 'selected' :''; ?> value="bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu">Bagaimana Cara Pekerjaan Tersebut Jawaban Bisa Lebih Dari Satu</option>
                           <option <?= $this->input->get('f') == 'berapa_perusahaan_yang_dilamar_lewat_surat_email_' ? 'selected' :''; ?> value="berapa_perusahaan_yang_dilamar_lewat_surat_email_">Berapa Perusahaan Yang Dilamar Lewat Surat Email </option>
                           <option <?= $this->input->get('f') == '_jumlah_perusahaan_yang_merespons_lamaran_anda_' ? 'selected' :''; ?> value="_jumlah_perusahaan_yang_merespons_lamaran_anda_"> Jumlah Perusahaan Yang Merespons Lamaran Anda </option>
                           <option <?= $this->input->get('f') == 'jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_' ? 'selected' :''; ?> value="jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_">Jumlah Perusahaan Yang Mengundang Anda Untuk Wawancara </option>
                           <option <?= $this->input->get('f') == 'bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu' ? 'selected' :''; ?> value="bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu">Bagaimana Situasi Anda Saat Ini Jawaban Bisa Lebih Dari Satu</option>
                           <option <?= $this->input->get('f') == 'apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_' ? 'selected' :''; ?> value="apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_">Apakah Anda Aktif Mencari Pekerjaan Dalam 4 Minggu Terkahir </option>
                           <option <?= $this->input->get('f') == 'apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_' ? 'selected' :''; ?> value="apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_">Apa Jenis Perusahaan Tempat Anda Bekerja Sekarang </option>
                           <option <?= $this->input->get('f') == 'jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_' ? 'selected' :''; ?> value="jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_">Jika Pekerjaan Tidak Sesuai Kenapa Mengambilnya </option>
                           <option <?= $this->input->get('f') == 'pengetahuan_di_bidang_atau_disiplin_ilmu_anda' ? 'selected' :''; ?> value="pengetahuan_di_bidang_atau_disiplin_ilmu_anda">Pengetahuan Di Bidang Atau Disiplin Ilmu Anda</option>
                           <option <?= $this->input->get('f') == 'pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda' ? 'selected' :''; ?> value="pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda">Pengetahuan Di Luar Bidang Atau Disiplin Ilmu Anda</option>
                           <option <?= $this->input->get('f') == 'pengetahuan_umum' ? 'selected' :''; ?> value="pengetahuan_umum">Pengetahuan Umum</option>
                           <option <?= $this->input->get('f') == 'bahasa_inggris' ? 'selected' :''; ?> value="bahasa_inggris">Bahasa Inggris</option>
                           <option <?= $this->input->get('f') == 'ketrampilan_internet_' ? 'selected' :''; ?> value="ketrampilan_internet_">Ketrampilan Internet </option>
                           <option <?= $this->input->get('f') == 'ketrampilan_komputer' ? 'selected' :''; ?> value="ketrampilan_komputer">Ketrampilan Komputer</option>
                           <option <?= $this->input->get('f') == 'berpikir_kritis_' ? 'selected' :''; ?> value="berpikir_kritis_">Berpikir Kritis </option>
                           <option <?= $this->input->get('f') == 'ketrampilan_riset' ? 'selected' :''; ?> value="ketrampilan_riset">Ketrampilan Riset</option>
                           <option <?= $this->input->get('f') == 'kemampuan_belajar' ? 'selected' :''; ?> value="kemampuan_belajar">Kemampuan Belajar</option>
                           <option <?= $this->input->get('f') == 'kemampuan_berkomunikasi' ? 'selected' :''; ?> value="kemampuan_berkomunikasi">Kemampuan Berkomunikasi</option>
                           <option <?= $this->input->get('f') == 'bekerja_di_bawah_tekanan' ? 'selected' :''; ?> value="bekerja_di_bawah_tekanan">Bekerja Di Bawah Tekanan</option>
                           <option <?= $this->input->get('f') == 'manajemen_waktu' ? 'selected' :''; ?> value="manajemen_waktu">Manajemen Waktu</option>
                           <option <?= $this->input->get('f') == 'bekerja_secara_mandiri' ? 'selected' :''; ?> value="bekerja_secara_mandiri">Bekerja Secara Mandiri</option>
                           <option <?= $this->input->get('f') == 'bekerja_dalam_tim_bekerjasama_dengan_orang_lain' ? 'selected' :''; ?> value="bekerja_dalam_tim_bekerjasama_dengan_orang_lain">Bekerja Dalam Tim Bekerjasama Dengan Orang Lain</option>
                           <option <?= $this->input->get('f') == 'kemampuan_dalam_memecahkan_masalah' ? 'selected' :''; ?> value="kemampuan_dalam_memecahkan_masalah">Kemampuan Dalam Memecahkan Masalah</option>
                           <option <?= $this->input->get('f') == 'negosiasi_' ? 'selected' :''; ?> value="negosiasi_">Negosiasi </option>
                           <option <?= $this->input->get('f') == 'kemampuan_untuk_terus_belajar_sepanjang_hayat' ? 'selected' :''; ?> value="kemampuan_untuk_terus_belajar_sepanjang_hayat">Kemampuan Untuk Terus Belajar Sepanjang Hayat</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/form_formtracer');?>" title="<?= cclang('reset_filter'); ?>">
                        <i class="fa fa-undo"></i>
                        </a>
                     </div>
                  </div>
                  </form>                  <div class="col-md-4">
                     <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                        <?= $pagination; ?>
                     </div>
                  </div>
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
   
    $('.remove-data').click(function(){

      var url = $(this).attr('data-href');

      swal({
          title: "<?= cclang('are_you_sure'); ?>",
          text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
          cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            document.location.href = url;            
          }
        });

      return false;
    });


    $('#apply').click(function(){

      var bulk = $('#bulk');
      var serialize_bulk = $('#form_form_formtracer').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
            cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/administrator/form_formtracer/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "<?= cclang('please_choose_bulk_action_first'); ?>",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Okay!",
            closeOnConfirm: true,
            closeOnCancel: true
          });

        return false;
      }

      return false;

    });/*end appliy click*/


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {   
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });

  }); /*end doc ready*/
</script>