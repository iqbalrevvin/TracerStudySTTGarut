<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCOi5vktJx2fjOA4X9orhT_-v2SIvsv060 "></script>
<script src="<?= BASE_ASSET; ?>jquery-map/dist/jquery.addressPickerByGiro.js"></script>
<link href="<?= BASE_ASSET; ?>jquery-map/dist/jquery.addressPickerByGiro.css" rel="stylesheet" media="screen">

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
                            <label for="npm" class="col-sm-2 control-label">NPM 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="npm" value="<?= set_value('npm', $form_formtracer->npm); ?>" id="npm" placeholder=""  >
                                <small class="info help-block">
                                <b>Format NPM must</b> Valid Number,  <b>Input NPM</b> Max Length : 7.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="email" class="col-sm-2 control-label">Email 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" value="<?= set_value('email', $form_formtracer->email); ?>" id="email" placeholder=""  >
                                <small class="info help-block">
                                <b>Format Email must</b> Valid Email.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="no_hp" class="col-sm-2 control-label">No. Hp 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_hp" value="<?= set_value('no_hp', $form_formtracer->no_hp); ?>" id="no_hp" placeholder=""  >
                                <small class="info help-block">
                                <b>Format No. Hp must</b> Valid Number.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="nama_depan" class="col-sm-2 control-label">Nama Depan 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_depan" value="<?= set_value('nama_depan', $form_formtracer->nama_depan); ?>" id="nama_depan" placeholder=""  >
                                <small class="info help-block">
                                <b>Format Nama Depan must</b> Alpha,  <b>Input Nama Depan</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="nama_belakang" class="col-sm-2 control-label">Nama Belakang 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_belakang" value="<?= set_value('nama_belakang', $form_formtracer->nama_belakang); ?>" id="nama_belakang" placeholder=""  >
                                <small class="info help-block">
                                <b>Format Nama Belakang must</b> Alpha,  <b>Input Nama Belakang</b> Max Length : 100.</small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="alamat_rumah" class="col-sm-2 control-label">Alamat Rumah 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input autocomplete="off" type="text" value="<?= set_value('alamat_rumah', $form_formtracer->alamat_rumah); ?>" class="form-control" name="alamat_rumah" id="alamat_rumah" placeholder=""  >
                                <small class="info help-block">
                                </small>
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
      $('#alamat_rumah').addressPickerByGiro({distanceWidget: true});
      
             
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