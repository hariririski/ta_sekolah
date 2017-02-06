<!DOCTYPE HTML>
<html>
	<head>
		
		<script type="text/javascript" src="<?php echo base_url()?>assets/jquery.min.js"></script>

 
<?php
    /* Mengambil query report*/
	$bulan;
    foreach($grafik as $result){
        $bulan[] = $result->jenis_kelamin; //ambil bulan
        $value[] = (float) $result->jumlah; //ambil nilai
    }
	$TH=$_GET['TH'];
    /* end mengambil query*/
     
?>
 
<!-- Load chart dengan menggunakan ID -->
<div id="report"></div>
<!-- END load chart -->
 
<!-- Script untuk memanggil library Highcharts -->
<?php

if(empty($bulan) ){
	?>
	<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Grafik Jenis Kelamin Tahun Ajaran <?php echo $TH?>',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
       
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:['jenis_kelamin']
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
        },
        tooltip: {
             formatter: function() {
                 return "jenis_kelamin"+this.x + '</b> Memiliki <b>' + Highcharts.numberFormat(this.y,0) + '</b>,';
             }
          },
        series: [{
            name: 'jenis_kelamin',
            data:[0],
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
        </script>
<?php
	
	}else{
		
	

?>
<script type="text/javascript">
$(function () {
    $('#report').highcharts({
        chart: {
            type: 'column',
            margin: 75,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Grafik Jenis Kelamin Tahun Ajaran <?php echo $TH?>',
            style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
            }
        },
       
        plotOptions: {
            column: {
                depth: 25
            }
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories:  <?php echo json_encode($bulan);?>
        },
        exporting: { 
            enabled: false 
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
        },
        tooltip: {
             formatter: function() {
                 return "jenis_kelamin "+this.x + '</b> Memiliki <b>' + Highcharts.numberFormat(this.y,0) + '</b>, ';
             }
          },
        series: [{
            name: 'Jenis Kelamin',
            data: <?php echo json_encode($value);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#045396',
                align: 'center',
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
        </script>
<?php

	}
	?>
	<body>
<script src="<?php echo base_url()?>assets/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/data.js"></script>
<script src="<?php echo base_url()?>assets/drilldown.js"></script>

<div id="container" style="min-width: 100%; height: 400px; margin: 0 auto"></div>
	</body>
</html>
