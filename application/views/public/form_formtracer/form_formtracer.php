<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB3BwbuCW4JSDUb8FdU34xLfsLtn5HsU_g"></script>
<script src="<?= BASE_ASSET; ?>jquery-map/dist/jquery.addressPickerByGiro.js"></script>
<link href="<?= BASE_ASSET; ?>jquery-map/dist/jquery.addressPickerByGiro.css" rel="stylesheet" media="screen">

<script src="<?= BASE_ASSET; ?>js/custom.js"></script>


<?= form_open('', [
    'name'    => 'form_form_formtracer', 
    'class'   => 'form-horizontal form_form_formtracer', 
    'id'      => 'form_form_formtracer',
    'enctype' => 'multipart/form-data', 
    'method'  => 'POST'
]); ?>
 
<div class="form-group ">
    <label for="npm" class="col-sm-2 control-label">NPM 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="npm" id="npm" placeholder=""  >
        <small class="info help-block">
        <b>Format NPM must</b> Valid Number,  <b>Input NPM</b> Max Length : 7.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="email" class="col-sm-2 control-label">Email 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="email" class="form-control" name="email" id="email" placeholder=""  >
        <small class="info help-block">
        <b>Format Email must</b> Valid Email.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="no_hp" class="col-sm-2 control-label">No. Hp 
    </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder=""  >
        <small class="info help-block">
        <b>Format No. Hp must</b> Valid Number.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="nama_depan" class="col-sm-2 control-label">Nama Depan 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder=""  >
        <small class="info help-block">
        <b>Format Nama Depan must</b> Alpha,  <b>Input Nama Depan</b> Max Length : 100.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="nama_belakang" class="col-sm-2 control-label">Nama Belakang 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder=""  >
        <small class="info help-block">
        <b>Format Nama Belakang must</b> Alpha,  <b>Input Nama Belakang</b> Max Length : 100.</small>
    </div>
</div>
 
<div class="form-group ">
    <label for="alamat_rumah" class="col-sm-2 control-label">Alamat Rumah 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <input autocomplete="off" type="text" class="form-control" name="alamat_rumah" id="alamat_rumah" placeholder=""  >
        <small class="info help-block">
        </small>
    </div>
</div>


<div class="row col-sm-12 message">
</div>
<div class="col-sm-2">
</div>
<div class="col-sm-8 padding-left-0">
    <button class="btn btn-flat btn-primary btn_save" id="btn_save" data-stype='stay' onclick="myFunction()">
    Kirim
    </button>
    <span class="loading loading-hide">
    <img src="http://localhost/TracerStudySTTGarut/asset//img/loading-spin-primary.svg"> 
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
        var r = confirm("Formulir Akan Dikirim Ke Pihak CDC, Yakin Dengan Tindakan Ini?");
          if (r == true) {
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
          }
        return false;
      }); /*end btn save*/


      $('#alamat_rumah').addressPickerByGiro({distanceWidget: true});
      function myFunction() {
  confirm("Press a button!");
}
             
           
    }); /*end doc ready*/
</script>