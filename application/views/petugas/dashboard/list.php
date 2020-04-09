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

    <div class="row">
        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="box box-danger">
                <h3 class="box-title">DATA </h3>
                <div class="box-body show_regional">
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
            // CALL FUNCTION SHOW REGIONAL
            show_regional();
 
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
                    show_regional();
                }
            });
 
            // FUNCTION SHOW TOTAL
            function show_total(){
                $.ajax({
                    url   : '<?php echo base_url("petugas/dashboard/get_total");?>',
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
                                      '<a href="<?php echo base_url('petugas/total_data') ?>" class="small-box-footer">' +
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
                    url   : '<?php echo base_url("petugas/dashboard/get_belum");?>',
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
                                      '<a href="<?php echo base_url('petugas/belum_diproses') ?>" class="small-box-footer">' +
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
                    url   : '<?php echo base_url("petugas/dashboard/get_sudah");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(sudah_diproses){
                        var html = '';
                            html += '<div class="small-box bg-orange">' +
                                      '<div class="inner">' +
                                        '<div style="font-size: 22px; margin-top: 10px; margin-bottom: 10px;">' +
                                          '<b>' + sudah_diproses + '</b>' +
<<<<<<< HEAD
                                          '<p>' + "On Progress" + '</p>' + 
=======
                                          '<p>' + "Sudah Diproses" + '</p>' + 
>>>>>>> a
                                        '</div>' +
                                      '</div>' +
                                      '<div class="icon">' +
                                          '<i class="ion ion-stats-bars">' + '</i>' +
                                      '</div>' +
                                      '<a href="<?php echo base_url('petugas/sudah_diproses') ?>" class="small-box-footer">' +
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
                    url   : '<?php echo base_url("petugas/dashboard/get_selesai");?>',
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
                                      '<a href="<?php echo base_url('petugas/selesai') ?>" class="small-box-footer">' +
                                        "Selengkapnya " + 
                                       '<i class="fa fa-arrow-circle-right">' + '</i>' + '</a>' +
                                    '</div>';
                        $('.show_selesai').html(html);
                    }
 
                });
            }

            // FUNCTION SHOW REGIONAL
            function show_regional(){
                $.ajax({
                    url   : '<?php echo base_url("petugas/dashboard/get_regional");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(regional){
                        var html = '';
                            html += '<canvas id="pieChart-regional" style="height:250px">' + '</canvas>';
                        $('.show_regional').html(html);

                        //-------------
                        //- PIE CHART-
                        //-------------
                        // Get context with jQuery - using jQuery's .get() method.
                        var pieChartCanvas = $("#pieChart-regional").get(0).getContext("2d");
                        var pieChart = new Chart(pieChartCanvas);
                        var PieData = [
                          {
                            value: regional.belum_diproses,
                            color: "#f56954",
                            highlight: "#f56954",
                            label: "Belum Diproses"
                          },
                          {
                            value: regional.sudah_diproses,
                            color: "#FF7F00",
                            highlight: "#FF7F00",
<<<<<<< HEAD
                            label: "On Progress"
=======
                            label: "Sudah Diproses"
>>>>>>> a
                          },
                          {
                            value: regional.selesai,
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