    <div class="row">
        <div class="col-lg-3 col-xs-6 show_total">
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6 show_belum">
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6 show_sudah">
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6 show_selesai">
        </div><!-- ./col -->
    </div><!-- /.row -->

    <!-- DONUT CHART -->
    <div class="box box-danger">
        <h3 class="box-title">Log</h3>
        <div class="table-responsive">
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>WAKTU</th>
                        <th>USERNAME</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($log as $log) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $log->waktu ?></td>
                        <td><?php echo $log->username ?></td>
                        <td><?php echo $log->keterangan ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA PEKANBARU</h3>
                <div class="box-body show_pekanbaru">
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA DUMAI</h3>
                <div class="box-body show_dumai">
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA SIAK</h3>
                <div class="box-body show_siak">
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA ROKAN HULU</h3>
                <div class="box-body show_rohul">
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA ROKAN HILIR</h3>
                <div class="box-body show_rohil">
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA PELALAWAN</h3>
                <div class="box-body">
                    <canvas id="pieChart-pelalawan" style="height:250px"></canvas>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA KUANTAN SINGINGI</h3>
                <div class="box-body">
                    <canvas id="pieChart-kuansing" style="height:250px"></canvas>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA KEPULAUAN MERANTI</h3>
                <div class="box-body">
                    <canvas id="pieChart-meranti" style="height:250px"></canvas>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA KAMPAR</h3>
                <div class="box-body">
                    <canvas id="pieChart-kampar" style="height:250px"></canvas>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA INDRAGIRI HULU</h3>
                <div class="box-body">
                    <canvas id="pieChart-inhu" style="height:250px"></canvas>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA INDRAGIRI HILIR</h3>
                <div class="box-body">
                    <canvas id="pieChart-inhil" style="height:250px"></canvas>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA BENGKALIS</h3>
                <div class="box-body">
                    <canvas id="pieChart-bengkalis" style="height:250px"></canvas>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
    

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url("assets/admin/plugins/jQuery/jQuery-2.1.4.min.js")?> "></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo base_url("assets/admin/plugins/chartjs/Chart.min.js")?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url("assets/admin/plugins/fastclick/fastclick.min.js")?>"></script> 
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url("assets/admin/dist/js/demo.js")?>"></script>
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script>
        $(document).ready(function(){
            // CALL FUNCTION SHOW TOTAL
            show_total();
            // CALL FUNCTION SHOW BELUM
            show_belum();
            // CALL FUNCTION SHOW SUDAH
            show_sudah();
            // CALL FUNCTION SHOW SELESAI
            show_selesai();
            // CALL FUNCTION SHOW PEKANBARU
            show_pekanbaru();
            // CALL FUNCTION SHOW DUMAI
            show_dumai();
            // CALL FUNCTION SHOW SIAK
            show_siak();
            // CALL FUNCTION SHOW ROHUL
            show_rohul();
            // CALL FUNCTION SHOW ROHIL
            show_rohil();
 
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
 
            var pusher = new Pusher('c451a8fcd656194f0e5b', {
                cluster: 'ap1',
                forceTLS: true
            });
 
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                if(data.message === 'success'){
                    show_total();
                    show_belum();
                    show_sudah();
                    show_selesai();
                    show_pekanbaru();
                    show_dumai();
                    show_siak();
                    show_rohul();
                    show_rohil();
                }
            });
 
            // FUNCTION SHOW TOTAL
            function show_total(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_total");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(total_data){
                        var html = '';
                            html += '<div class="small-box bg-light-blue">' +
                                      '<div class="inner">' +
                                        '<div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;">' +
                                          '<b>' + total_data + '</b>' +
                                          '<p>' + "Total Data" + '</p>' + 
                                        '</div>' +
                                      '</div>' +
                                      '<div class="icon">' +
                                          '<i class="ion ion-stats-bars">' + '</i>' +
                                      '</div>' +
                                      '<a href="<?php echo base_url('admin/total_data') ?>" class="small-box-footer">' +
                                        "Selengkapnya " + 
                                       '<i class="fa fa-arrow-circle-right">' + '</i>' + '</a>' +
                                    '</div>';
                        $('.show_total').html(html);
                    }
 
                });
            }

            // FUNCTION SHOW BELUM
            function show_belum(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_belum");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(belum_diproses){
                        var html = '';
                            html += '<div class="small-box bg-red">' +
                                      '<div class="inner">' +
                                        '<div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;">' +
                                          '<b>' + belum_diproses + '</b>' +
                                          '<p>' + "Belum Diproses" + '</p>' + 
                                        '</div>' +
                                      '</div>' +
                                      '<div class="icon">' +
                                          '<i class="ion ion-stats-bars">' + '</i>' +
                                      '</div>' +
                                      '<a href="<?php echo base_url('admin/belum_diproses') ?>" class="small-box-footer">' +
                                        "Selengkapnya " + 
                                       '<i class="fa fa-arrow-circle-right">' + '</i>' + '</a>' +
                                    '</div>';
                        $('.show_belum').html(html);
                    }
 
                });
            }

            // FUNCTION SHOW SUDAH
            function show_sudah(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_sudah");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(sudah_diproses){
                        var html = '';
                            html += '<div class="small-box bg-orange">' +
                                      '<div class="inner">' +
                                        '<div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;">' +
                                          '<b>' + sudah_diproses + '</b>' +
                                          '<p>' + "Sudah Diproses" + '</p>' + 
                                        '</div>' +
                                      '</div>' +
                                      '<div class="icon">' +
                                          '<i class="ion ion-stats-bars">' + '</i>' +
                                      '</div>' +
                                      '<a href="<?php echo base_url('admin/sudah_diproses') ?>" class="small-box-footer">' +
                                        "Selengkapnya " + 
                                       '<i class="fa fa-arrow-circle-right">' + '</i>' + '</a>' +
                                    '</div>';
                        $('.show_sudah').html(html);
                    }
 
                });
            }

            // FUNCTION SHOW SELESAI
            function show_selesai(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_selesai");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(selesai){
                        var html = '';
                            html += '<div class="small-box bg-green">' +
                                      '<div class="inner">' +
                                        '<div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;">' +
                                          '<b>' + selesai + '</b>' +
                                          '<p>' + "Selesai" + '</p>' + 
                                        '</div>' +
                                      '</div>' +
                                      '<div class="icon">' +
                                          '<i class="ion ion-stats-bars">' + '</i>' +
                                      '</div>' +
                                      '<a href="<?php echo base_url('admin/selesai') ?>" class="small-box-footer">' +
                                        "Selengkapnya " + 
                                       '<i class="fa fa-arrow-circle-right">' + '</i>' + '</a>' +
                                    '</div>';
                        $('.show_selesai').html(html);
                    }
 
                });
            }

            // FUNCTION SHOW PEKANBARU
            function show_pekanbaru(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_pekanbaru");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(pekanbaru){
                        var html = '';
                            html += '<canvas id="pieChart-pekanbaru" style="height:250px">' + '</canvas>';
                        $('.show_pekanbaru').html(html);

                        //-------------
                        //- PIE CHART PEKANBARU -
                        //-------------
                        // Get context with jQuery - using jQuery's .get() method.
                        var pieChartCanvas = $("#pieChart-pekanbaru").get(0).getContext("2d");
                        var pieChart = new Chart(pieChartCanvas);
                        var PieData = [
                          {
                            value: pekanbaru.belum_pekanbaru,
                            color: "#f56954",
                            highlight: "#f56954",
                            label: "Belum Diproses"
                          },
                          {
                            value: pekanbaru.sudah_pekanbaru,
                            color: "#FF7F00",
                            highlight: "#FF7F00",
                            label: "Sudah Diproses"
                          },
                          {
                            value: pekanbaru.selesai_pekanbaru,
                            color: "#00a65a",
                            highlight: "#00a65a",
                            label: "Selesai"
                          },
                        ];
                        var pieOptions = {
                          //Boolean - Whether we should show a stroke on each segment
                          segmentShowStroke: true,
                          //String - The colour of each segment stroke
                          segmentStrokeColor: "#fff",
                          //Number - The width of each segment stroke
                          segmentStrokeWidth: 2,
                          //Number - The percentage of the chart that we cut out of the middle
                          percentageInnerCutout: 50, // This is 0 for Pie charts
                          //Number - Amount of animation steps
                          animationSteps: 100,
                          //String - Animation easing effect
                          animationEasing: "easeOutBounce",
                          //Boolean - Whether we animate the rotation of the Doughnut
                          animateRotate: true,
                          //Boolean - Whether we animate scaling the Doughnut from the centre
                          animateScale: false,
                          //Boolean - whether to make the chart responsive to window resizing
                          responsive: true,
                          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                          maintainAspectRatio: true,
                          //String - A legend template
                          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                        };
                        //Create pie or douhnut chart
                        // You can switch between pie and douhnut using the method below.
                        pieChart.Doughnut(PieData, pieOptions);
                    }
 
                });
            }

            // FUNCTION SHOW DUMAI
            function show_dumai(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_dumai");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(dumai){
                        var html = '';
                            html += '<canvas id="pieChart-dumai" style="height:250px">' + '</canvas>';
                        $('.show_dumai').html(html);

                        //-------------
                        //- PIE CHART-
                        //-------------
                        // Get context with jQuery - using jQuery's .get() method.
                        var pieChartCanvas = $("#pieChart-dumai").get(0).getContext("2d");
                        var pieChart = new Chart(pieChartCanvas);
                        var PieData = [
                          {
                            value: dumai.belum_dumai,
                            color: "#f56954",
                            highlight: "#f56954",
                            label: "Belum Diproses"
                          },
                          {
                            value: dumai.sudah_dumai,
                            color: "#FF7F00",
                            highlight: "#FF7F00",
                            label: "Sudah Diproses"
                          },
                          {
                            value: dumai.selesai_dumai,
                            color: "#00a65a",
                            highlight: "#00a65a",
                            label: "Selesai"
                          },
                        ];
                        var pieOptions = {
                          //Boolean - Whether we should show a stroke on each segment
                          segmentShowStroke: true,
                          //String - The colour of each segment stroke
                          segmentStrokeColor: "#fff",
                          //Number - The width of each segment stroke
                          segmentStrokeWidth: 2,
                          //Number - The percentage of the chart that we cut out of the middle
                          percentageInnerCutout: 50, // This is 0 for Pie charts
                          //Number - Amount of animation steps
                          animationSteps: 100,
                          //String - Animation easing effect
                          animationEasing: "easeOutBounce",
                          //Boolean - Whether we animate the rotation of the Doughnut
                          animateRotate: true,
                          //Boolean - Whether we animate scaling the Doughnut from the centre
                          animateScale: false,
                          //Boolean - whether to make the chart responsive to window resizing
                          responsive: true,
                          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                          maintainAspectRatio: true,
                          //String - A legend template
                          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                        };
                        //Create pie or douhnut chart
                        // You can switch between pie and douhnut using the method below.
                        pieChart.Doughnut(PieData, pieOptions);
                    }
                });
            }

            // FUNCTION SHOW SIAK
            function show_siak(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_siak");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(siak){
                        var html = '';
                            html += '<canvas id="pieChart-siak" style="height:250px">' + '</canvas>';
                        $('.show_siak').html(html);

                        //-------------
                        //- PIE CHART-
                        //-------------
                        // Get context with jQuery - using jQuery's .get() method.
                        var pieChartCanvas = $("#pieChart-siak").get(0).getContext("2d");
                        var pieChart = new Chart(pieChartCanvas);
                        var PieData = [
                          {
                            value: siak.belum_siak,
                            color: "#f56954",
                            highlight: "#f56954",
                            label: "Belum Diproses"
                          },
                          {
                            value: siak.sudah_siak,
                            color: "#FF7F00",
                            highlight: "#FF7F00",
                            label: "Sudah Diproses"
                          },
                          {
                            value: siak.selesai_siak,
                            color: "#00a65a",
                            highlight: "#00a65a",
                            label: "Selesai"
                          },
                        ];
                        var pieOptions = {
                          //Boolean - Whether we should show a stroke on each segment
                          segmentShowStroke: true,
                          //String - The colour of each segment stroke
                          segmentStrokeColor: "#fff",
                          //Number - The width of each segment stroke
                          segmentStrokeWidth: 2,
                          //Number - The percentage of the chart that we cut out of the middle
                          percentageInnerCutout: 50, // This is 0 for Pie charts
                          //Number - Amount of animation steps
                          animationSteps: 100,
                          //String - Animation easing effect
                          animationEasing: "easeOutBounce",
                          //Boolean - Whether we animate the rotation of the Doughnut
                          animateRotate: true,
                          //Boolean - Whether we animate scaling the Doughnut from the centre
                          animateScale: false,
                          //Boolean - whether to make the chart responsive to window resizing
                          responsive: true,
                          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                          maintainAspectRatio: true,
                          //String - A legend template
                          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                        };
                        //Create pie or douhnut chart
                        // You can switch between pie and douhnut using the method below.
                        pieChart.Doughnut(PieData, pieOptions);
                    }
                });
            }

            // FUNCTION SHOW ROHUL
            function show_rohul(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_rohul");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(rohul){
                        var html = '';
                            html += '<canvas id="pieChart-rohul" style="height:250px">' + '</canvas>';
                        $('.show_rohul').html(html);

                        //-------------
                        //- PIE CHART-
                        //-------------
                        // Get context with jQuery - using jQuery's .get() method.
                        var pieChartCanvas = $("#pieChart-rohul").get(0).getContext("2d");
                        var pieChart = new Chart(pieChartCanvas);
                        var PieData = [
                          {
                            value: rohul.belum_rohul,
                            color: "#f56954",
                            highlight: "#f56954",
                            label: "Belum Diproses"
                          },
                          {
                            value: rohul.sudah_rohul,
                            color: "#FF7F00",
                            highlight: "#FF7F00",
                            label: "Sudah Diproses"
                          },
                          {
                            value: rohul.selesai_rohul,
                            color: "#00a65a",
                            highlight: "#00a65a",
                            label: "Selesai"
                          },
                        ];
                        var pieOptions = {
                          //Boolean - Whether we should show a stroke on each segment
                          segmentShowStroke: true,
                          //String - The colour of each segment stroke
                          segmentStrokeColor: "#fff",
                          //Number - The width of each segment stroke
                          segmentStrokeWidth: 2,
                          //Number - The percentage of the chart that we cut out of the middle
                          percentageInnerCutout: 50, // This is 0 for Pie charts
                          //Number - Amount of animation steps
                          animationSteps: 100,
                          //String - Animation easing effect
                          animationEasing: "easeOutBounce",
                          //Boolean - Whether we animate the rotation of the Doughnut
                          animateRotate: true,
                          //Boolean - Whether we animate scaling the Doughnut from the centre
                          animateScale: false,
                          //Boolean - whether to make the chart responsive to window resizing
                          responsive: true,
                          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                          maintainAspectRatio: true,
                          //String - A legend template
                          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                        };
                        //Create pie or douhnut chart
                        // You can switch between pie and douhnut using the method below.
                        pieChart.Doughnut(PieData, pieOptions);
                    }
                });
            }

            // FUNCTION SHOW ROHIL
            function show_rohil(){
                $.ajax({
                    url   : '<?php echo base_url("admin/dashboard/get_rohil");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(rohil){
                        var html = '';
                            html += '<canvas id="pieChart-rohil" style="height:250px">' + '</canvas>';
                        $('.show_rohil').html(html);

                        //-------------
                        //- PIE CHART-
                        //-------------
                        // Get context with jQuery - using jQuery's .get() method.
                        var pieChartCanvas = $("#pieChart-rohil").get(0).getContext("2d");
                        var pieChart = new Chart(pieChartCanvas);
                        var PieData = [
                          {
                            value: rohil.belum_rohil,
                            color: "#f56954",
                            highlight: "#f56954",
                            label: "Belum Diproses"
                          },
                          {
                            value: rohil.sudah_rohil,
                            color: "#FF7F00",
                            highlight: "#FF7F00",
                            label: "Sudah Diproses"
                          },
                          {
                            value: rohil.selesai_rohil,
                            color: "#00a65a",
                            highlight: "#00a65a",
                            label: "Selesai"
                          },
                        ];
                        var pieOptions = {
                          //Boolean - Whether we should show a stroke on each segment
                          segmentShowStroke: true,
                          //String - The colour of each segment stroke
                          segmentStrokeColor: "#fff",
                          //Number - The width of each segment stroke
                          segmentStrokeWidth: 2,
                          //Number - The percentage of the chart that we cut out of the middle
                          percentageInnerCutout: 50, // This is 0 for Pie charts
                          //Number - Amount of animation steps
                          animationSteps: 100,
                          //String - Animation easing effect
                          animationEasing: "easeOutBounce",
                          //Boolean - Whether we animate the rotation of the Doughnut
                          animateRotate: true,
                          //Boolean - Whether we animate scaling the Doughnut from the centre
                          animateScale: false,
                          //Boolean - whether to make the chart responsive to window resizing
                          responsive: true,
                          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                          maintainAspectRatio: true,
                          //String - A legend template
                          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                        };
                        //Create pie or douhnut chart
                        // You can switch between pie and douhnut using the method below.
                        pieChart.Doughnut(PieData, pieOptions);
                    }
                });
            }
          });
    </script>

    <!-- ROHIL -->
    <script>
        //-------------
        //- PIE CHART-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart-rohil").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $belum_rohil ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Belum Diproses"
          },
          {
            value: <?php echo $sudah_rohil ?>,
            color: "#FF7F00",
            highlight: "#FF7F00",
            label: "Sudah Diproses"
          },
          {
            value: <?php echo $selesai_rohil ?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Selesai"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
    </script>

    <!-- PELALAWAN -->
    <script>
        //-------------
        //- PIE CHART-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart-pelalawan").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $belum_pelalawan ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Belum Diproses"
          },
          {
            value: <?php echo $sudah_pelalawan ?>,
            color: "#FF7F00",
            highlight: "#FF7F00",
            label: "Sudah Diproses"
          },
          {
            value: <?php echo $selesai_pelalawan ?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Selesai"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
    </script>

    <!-- KUANSING -->
    <script>
        //-------------
        //- PIE CHART-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart-kuansing").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $belum_kuansing ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Belum Diproses"
          },
          {
            value: <?php echo $sudah_kuansing ?>,
            color: "#FF7F00",
            highlight: "#FF7F00",
            label: "Sudah Diproses"
          },
          {
            value: <?php echo $selesai_kuansing ?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Selesai"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
    </script>

    <!-- MERANTI -->
    <script>
        //-------------
        //- PIE CHART-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart-meranti").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $belum_meranti ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Belum Diproses"
          },
          {
            value: <?php echo $sudah_meranti ?>,
            color: "#FF7F00",
            highlight: "#FF7F00",
            label: "Sudah Diproses"
          },
          {
            value: <?php echo $selesai_meranti ?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Selesai"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
    </script>

    <!-- KAMPAR -->
    <script>
        //-------------
        //- PIE CHART-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart-kampar").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $belum_kampar ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Belum Diproses"
          },
          {
            value: <?php echo $sudah_kampar ?>,
            color: "#FF7F00",
            highlight: "#FF7F00",
            label: "Sudah Diproses"
          },
          {
            value: <?php echo $selesai_kampar ?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Selesai"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
    </script>

    <!-- INHU -->
    <script>
        //-------------
        //- PIE CHART-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart-inhu").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $belum_inhu ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Belum Diproses"
          },
          {
            value: <?php echo $sudah_inhu ?>,
            color: "#FF7F00",
            highlight: "#FF7F00",
            label: "Sudah Diproses"
          },
          {
            value: <?php echo $selesai_inhu ?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Selesai"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
    </script>

    <!-- INHIL -->
    <script>
        //-------------
        //- PIE CHART-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart-inhil").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $belum_inhil ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Belum Diproses"
          },
          {
            value: <?php echo $sudah_inhil ?>,
            color: "#FF7F00",
            highlight: "#FF7F00",
            label: "Sudah Diproses"
          },
          {
            value: <?php echo $selesai_inhil ?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Selesai"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
    </script>

    <!-- BENGKALIS -->
    <script>
        //-------------
        //- PIE CHART-
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart-bengkalis").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $belum_bengkalis ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Belum Diproses"
          },
          {
            value: <?php echo $sudah_bengkalis ?>,
            color: "#FF7F00",
            highlight: "#FF7F00",
            label: "Sudah Diproses"
          },
          {
            value: <?php echo $selesai_bengkalis ?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Selesai"
          },
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
    </script>