<p class="pull-right">
    <div class="btn-group">
        <button title="Cetak Grafik" id="printChart" class="btn btn-success btn-md">
            <i class="fa fa-print"></i> Cetak Grafik
        </button>
    </div>
</p>

<div class="row">
    <form method="post" action="<?php echo base_url('admin/anggaran_samsat') ?>">
        <div class="box-body">
            <div class="form-group">
                <label>Tahun Anggaran :</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <select class="form-control" style="width: 100%;" name="tahun">
                    <?php foreach ($tahunAnggaran as $row) {?>
                        <option><?php echo $row->tahun; ?></option>
                    <?php } ?> 
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right" name="btn_search" id="btn_search">Cari</button>
        </div>
    </form>
</div>

<div id="chartContainer" style="height: 275px; width: 100%;"></div>

<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		theme: "light2",
		title:{
			text: "Print Chart using print() method"              
		},
		data: [              
		{
			type: "column",
			dataPoints: [
				{ label: "apple",  y: 10  },
				{ label: "orange", y: 15  },
				{ label: "banana", y: 25  },
				{ label: "mango",  y: 30  },
				{ label: "grape",  y: 28  }
			]
		}
		]
	});
  
	chart.render();
  	document.getElementById("printChart").addEventListener("click",function(){
    	chart.print();
    });  	
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>