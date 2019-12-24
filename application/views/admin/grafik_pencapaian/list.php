<p class="pull-right">
    <div class="btn-group">
        <button title="Cetak Grafik" id="printChart" class="btn btn-success btn-md">
            <i class="fa fa-print"></i> Cetak Grafik
        </button>
    </div>
</p>

<div id="chartContainer" style="height: 275px; width: 100%;"></div>

<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		theme: "light2",
		title:{
			text: "Grafik Anggaran Tahunan"              
		},
		data: [              
		{
			type: "column",
			dataPoints: [
				{ label: "apple",  x: 10  },
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