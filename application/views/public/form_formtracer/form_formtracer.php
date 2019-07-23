
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
 
<div class="form-group ">
    <label for="lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_" class="col-sm-2 control-label">Lama Waktu Yang Di Habiskan Untuk Memperoleh Pekerjaan Pertama? 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
        <select  class="form-control chosen chosen-select" name="lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_" id="lama_waktu_yang_di_habiskan_untuk_memperoleh_pekerjaan_pertama_" data-placeholder="Select Lama Waktu Yang Di Habiskan Untuk Memperoleh Pekerjaan Pertama?" >
            <option value=""></option>
            <option value="6_Sampai_10_Bulan_Sebelum_Lulus">6 Sampai 10 Sulan Sebelum Lulus</option>
            <option value="1_Sampai_5_Bulan_Sebelum_Lulus">1 Sampai 5 Bulan Sebelum Lulus</option>
            <option value="Kurang_Dari_1_Bulan_Sebelum_Lulus">Kurang Dari 1 Bulan Sebelum Lulus</option>
            <option value="Kurang_Dari_1_Bulan_Setelah_Lulus">Kurang Dari 1 Bulan Setelah Lulus</option>
            <option value="1_Sampai_5_Bulan_Setelah_Lulus">1 Sampai 5 Bulan Setelah Lulus</option>
            <option value="6_Sampai_10_Bulan_Setelah_Lulus">6 Sampai 10 Bulan Sebelum Lulus</option>
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
    <label for="demonstrasi" class="col-sm-2 control-label">Demonstrasi 
    <i class="required">*</i>
    </label>
    <div class="col-sm-8">
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="demonstrasi" value="Sangat Besar" > Sangat Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="demonstrasi" value="Besar" > Besar            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="demonstrasi" value="Cukup" > Cukup            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="demonstrasi" value="Kurang" > Kurang            </label>
            </div>
            <div class="col-md-3 padding-left-0">
            <label>
            <input type="radio" class="flat-red" name="demonstrasi" value="Sangat Kurang" > Sangat Kurang            </label>
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