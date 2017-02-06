<?php

include("mpdf60/mpdf.php");
//$mpdf=new mPDF ('utf-8','Legal');
$mpdf = new mPDF('',    // mode - default ''
'Legal',    // format - A4, for example, default ''
0,     // font size - default 0
'',    // default font family
20,    // margin_left
20,    // margin right
16,     // margin top
16,    // margin bottom
9,     // margin header
9,     // margin footer

 'L');  // L - landscape, P - portrait
$date=date('d F Y');
$tahun=date('Y');
$strhtml .="
<html>
	<head>
		<style>
				
				.container {
					width: 970px;
					margin: auto;
					text-align: center;
				}
				.tengah {
					text-align: left;
				}

				.font{
					font-family: Arial, sans-serif;
				}
				.kanan{
					position: absolute;
					top: 570px;
					right: 200;	
					
				}
				table {
					border-collapse: collapse;

				}


				.garis{
					border: 0px solid black;
					
				}
		</style>
	</head>
	<body>
	<table  width='100%' border='0'>
		<tr>
			<td width='50px'><img border='1' src='".base_url()."assets/img/bnn2.png' width='100px'></td>
			<td  align='center'>
				<p><font size='20px'>BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA</font></p>
				<p><font size='20px'>SEKETARIATAN UTAMA</font></p>
				<p>Jl. MT. Haryono No. 11 Cawang, Jakarta Timur</p>
				<P>Tel/Fax : (021) - 80871566 / 80871567</P>
			</td>
		</tr>
	</table>
	<hr>
	";
	$strhtml .="
		<table  width='100%' border='1'>
		<tr>
			<th rowspan='2'>No</th>
			<th rowspan='2'>NISN</th>
			<th rowspan='2'>Nama</th>
			<th  rowspan='2'>L/P</th>
			<th  colspan='10'>Jam Ke</th>
			<th  rowspan='2'>Keterangan</th>
		</tr>
		<tr>
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			<th>9</th>
			<th>10</th>
		</tr>
	";
	$i=1;
	foreach($data_siswa as $data){
		if($data->jenis_kelamin=="Pria"){
			$data->jenis_kelamin="L";
		}
		else{
			$data->jenis_kelamin="P";
		}
		$strhtml .="
		<tr>
			<td> $i</td>
			<td> $data->nisn</td>
			<td> $data->nama_siswa</td>
			<td>$data->jenis_kelamin</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			
		</tr>
	";
	$i++;
	}
	
	$strhtml .="
		</table>
	";
	
	
	

	
	
?>





<?php
			
			
			
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();
			
			
				
			
?>
