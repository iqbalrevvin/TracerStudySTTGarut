
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
                                                 
                                                <div class="form-group ">
                            <label for="lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_" class="col-sm-2 control-label">Lama Waktu Yang Di Habiskan Untuk Memperoleh Pekerjaan Pertama? 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_" id="lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_" data-placeholder="Select Lama Waktu Yang Di Habiskan Untuk Memperoleh Pekerjaan Pertama?" >
                                    <option value=""></option>
                                    <option <?= $form_formtracer->lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_ == "6_Sampai_10_Bulan_Sebelum_Lulus" ? 'selected' :''; ?> value="6_Sampai_10_Bulan_Sebelum_Lulus">6 Sampai 10 Sulan Sebelum Lulus</option>
                                    <option <?= $form_formtracer->lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_ == "1_Sampai_5_Bulan_Sebelum_Lulus" ? 'selected' :''; ?> value="1_Sampai_5_Bulan_Sebelum_Lulus">1 Sampai 5 Bulan Sebelum Lulus</option>
                                    <option <?= $form_formtracer->lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_ == "Kurang_Dari_1_Bulan_Sebelum_Lulus" ? 'selected' :''; ?> value="Kurang_Dari_1_Bulan_Sebelum_Lulus">Kurang Dari 1 Bulan Sebelum Lulus</option>
                                    <option <?= $form_formtracer->lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_ == "Kurang_Dari_1_Bulan_Setelah_Lulus" ? 'selected' :''; ?> value="Kurang_Dari_1_Bulan_Setelah_Lulus">Kurang Dari 1 Bulan Setelah Lulus</option>
                                    <option <?= $form_formtracer->lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_ == "1_Sampai_5_Bulan_Setelah_Lulus" ? 'selected' :''; ?> value="1_Sampai_5_Bulan_Setelah_Lulus">1 Sampai 5 Bulan Setelah Lulus</option>
                                    <option <?= $form_formtracer->lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_ == "6_Sampai_10_Bulan_Setelah_Lulus" ? 'selected' :''; ?> value="6_Sampai_10_Bulan_Setelah_Lulus">6 Sampai 10 Bulan Sebelum Lulus</option>
                                    </select>
                                <small class="info help-block">
                                </small>
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
                            <label for="demonstrasi" class="col-sm-2 control-label">Demonstrasi 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->demonstrasi == "Sangat Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="demonstrasi" value="Sangat Besar" > Sangat Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->demonstrasi == "Besar" ? "checked" : ""; ?> type="radio" class="flat-red" name="demonstrasi" value="Besar" > Besar                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->demonstrasi == "Cukup" ? "checked" : ""; ?> type="radio" class="flat-red" name="demonstrasi" value="Cukup" > Cukup                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->demonstrasi == "Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="demonstrasi" value="Kurang" > Kurang                                    </label>
                                    </div>
                                    <div class="col-md-3 padding-left-0">
                                    <label>
                                    <input <?= $form_formtracer->demonstrasi == "Sangat Kurang" ? "checked" : ""; ?> type="radio" class="flat-red" name="demonstrasi" value="Sangat Kurang" > Sangat Kurang                                    </label>
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