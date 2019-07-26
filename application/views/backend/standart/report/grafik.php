<style type="text/css">
   .widget-user-header {
      padding-left: 20px !important;
   }
</style>

<link rel="stylesheet" href="<?= BASE_ASSET; ?>admin-lte/plugins/morris/morris.css">

<section class="content-header">
    <h1>
        Report
        <small>Grafik Status Pengisi Form Tracer</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard">
                </i>
                <?= cclang('home') ?>
            </a>
        </li>
        <li class="active">
            <?= cclang('dashboard') ?>
        </li>
    </ol>
</section>

<section class="content">
   
     <div class="row">
     	<!-- /.col (LEFT) -->
        <div class="col-md-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Sumber Dana Kuliah</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="chartBiayaKuliah" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

  
          <!-- /.box -->
        </div>
        <!-- /.col (RIGHT) -->
        <div class="col-md-6">
        	<div class="box box-danger">
	            <div class="box-header with-border">
	              <h3 class="box-title">Grafik Status Kerja</h3>

	              <div class="box-tools pull-right">
	                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	                </button>
	                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	              </div>
	            </div>
            	<div class="box-body chart-responsive">

              		<div class="chart" id="chartStatusPekerjaan" style="height: 300px;"></div>
            	</div>
            	<!-- /.box-body -->
          	</div>
         	 <!-- /.box -->


          	<!-- AREA CHART -->
        	
          
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Keterkaitan Bidang Studi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="chart2" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
</section>
<!-- /.content -->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
	Highcharts.chart('chartBiayaKuliah', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'Grafik Sumber Dana Kuliah'
	    },
	    tooltip: {
	        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	    },
	    plotOptions: {
	        pie: {
	            allowPointSelect: true,
	            cursor: 'pointer',
	            dataLabels: {
	                enabled: true,
	                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                style: {
	                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                }
	            }
	        }
	    },
	    series: [{
	        name: 'Brands',
	        colorByPoint: true,
	        data: [{
	            name: '[1] Biaya Sendiri',
	            y: <?= number_format($biayaSendiri) ?>,
	            sliced: true,
	            selected: true
	        },{
	            name: '[2] Keluarga',
	            y: <?= number_format($keluarga) ?>,
	            sliced: true,
	            selected: true
	        },{
	            name: '[3] Beasiswa ADIK',
	            y: <?= number_format($beasiswaADIK) ?>,
	            sliced: true,
	            selected: true
	        },{
	            name: '[4] Beasiswa Bidikmisi',
	            y: <?= number_format($beasiswaBidikmisi) ?>,
	            sliced: true,
	            selected: true
	        },{
	            name: '[5] Beasiswa AFIRMASI',
	            y: <?= number_format($beasiswaAFIRMASI) ?>,
	            sliced: true,
	            selected: true
	        },{
	            name: '[6] Beasiswa Perusahaan Negeri',
	            y: <?= number_format($beasiswaNegeri) ?>,
	            sliced: true,
	            selected: true
	        },{
	            name: '[7] Beasiswa Perusahaan Swasta',
	            y: <?= number_format($beasiswaSwasta) ?>,
	            sliced: true,
	            selected: true
	        },{
	            name: '[8] Lainnya. . . ',
	            y: <?= number_format($lainnya) ?>,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

	Highcharts.chart('chartStatusPekerjaan', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik Status Sedang Bekerja & Tidak Bekerja'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Sedang Bekerja',
            y: <?= number_format($jmlSedangBekerja) ?>,
            sliced: true,
            selected: true
        }, {
            name: 'Tidak Bekerja',
            y: <?= number_format($jmlTidakBekerja) ?>
        }]
    }]
});


Highcharts.chart('chart2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Keterkaitan Bidang Studi & Pekerjaan'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Tingkat Pilihan'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: false,
                format: '{point.y:.1f}'
            }
        }
    },

    

    series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [
                {
                    name: "Sangat Erat",
                    y: <?= number_format($ktProdiPekerjaanSangatErat) ?>,
                    drilldown: "Chrome"
                },
                {
                    name: "Erat",
                    y: <?= number_format($ktProdiPekerjaanErat) ?>,
                    drilldown: "Firefox"
                },
                {
                    name: "Cukup Erat",
                    y: <?= number_format($ktProdiPekerjaanCukupErat) ?>,
                    drilldown: "Internet Explorer"
                },
                {
                    name: "Kurang Erat",
                    y: <?= number_format($ktProdiPekerjaanKurangErat) ?>,
                    drilldown: "Safari"
                },
                {
                    name: "Tidak Sama Sekali",
                    y: <?= number_format($ktProdiPekerjaanTidakSamaSekali) ?>,
                    drilldown: "Edge"
                }
            ]
        }
    ]
});
</script>