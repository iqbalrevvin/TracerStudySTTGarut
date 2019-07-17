<?= get_header(); ?>
<body id="page-top">
   <?= get_navigation(); ?>

     <header>
      <div class="header-content" >
         <div class="header-content-inner">
            <h1 id="homeHeading">Selamat Datang Di<br>Sistem Tracer Study STT Garut</h1>
            <hr>
            <p> Tracer study adalah penelitian mengenai situasi alumni khususnya dalam hal pencarian kerja, situasi kerja, dan pemanfaatan pemerolehan kompetensi selama kuliah.<br>
            <!-- <code><?=  './cc-content/themes/cicool/view/home.php' ?> </code></p> -->
            <br>
            <a href="<?= base_url('page/tracer-responden') ?>" class="btn btn-primary btn-xl page-scroll"><i class="fa fa-list-alt"></i> Form Tracer Study</a>
         </div>
      </div>
   </header>
   <?= get_footer(); ?>