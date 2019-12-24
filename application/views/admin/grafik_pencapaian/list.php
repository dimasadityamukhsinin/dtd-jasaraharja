<p class="pull-right">
    <div class="btn-group">
        <button title="Cetak Grafik" id="printChart" class="btn btn-success btn-md">
            <i class="fa fa-print"></i> Cetak Grafik
        </button>
    </div>
</p>

<div class="chart">
    <!-- Sales Chart Canvas -->
    <div id="chart" style="height: 380px;"></div>
</div>
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/highcharts/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/highcharts/modules/exporting.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/highcharts/themes/dark-green.js"></script>

<script type="text/javascript">
jQuery(function(){
    new Highcharts.Chart({
        chart: {
            renderTo: 'chart',
            type: 'column',
        },
        title: {
            text: 'Perbandingan IWKBU dan IWKL Tahunan',
            x: -20
        },
        subtitle: {
            text: 'https://jasaraharja.co.id/',
            x: -20
        },
        xAxis: {
            categories: <?php echo json_encode($data1) ?>      
        },
        yAxis: {
            title: {
                text: 'Pendapatan (Rp)'
            }
        },
        plotOptions: {
            column: {
                dataLabels: {
                    enabled: true,
                    style: {
                    fontWeight: 'bold'
                }
                },
                enableMouseTracking: false
            }
        },        
        series: [{
            name: 'IWKBU',
            data: <?php echo json_encode($iwkbu); ?>
        }, {
            name: 'IWKL',
            data: <?php echo json_encode($iwkl); ?>
        }]
    });
}); 
</script>