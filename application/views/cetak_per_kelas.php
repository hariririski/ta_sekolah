<?php

include("mpdf60/mpdf.php");
//$mpdf=new mPDF ('utf-8','Legal');
$mpdf = new mPDF('',    // mode - default ''
'Legal-L',    // format - A4, for example, default ''
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
$tahun_ajaran=$_GET['tahun_ajaran'];
$kelas=$_GET['kelas'];
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
	";
	$url=base_url();
	foreach($header_absen as $data){
	$strhtml .="

	<table  width='100%' border='0'>
		<tr>
			<td width='50px'>
			<img src='$url"."assets/img/dinas_pendidikan.jpg' width='50px'>
			
			</td>
			<td width='300px'>
			<center>
				<p><font size='20px'>PEMERINTAH KABUPATEN ACEH BESAR</font></p>
				<p><H3>DINAS PENDIDIKAN</font></H3>
				<p><font size='20px'>SMA NEGERI 1 SEULIMEUM</p>
			
				
				</font>
			</center>	
			</td>
			<td width='50px'>
			<img src='$url"."assets/img/sekolah.jpg'  width='70px'>
			</td>
			<td >
			<center>
				<p><font size='20px'>DAFTAR HADIR SISWA</font></p>
				<p><font size='20px'>TAHUN PELAJARAN $tahun_ajaran</p>
				<p><font size='20px'>Kelas : $data->nama_kelas</p>
				
				
				</font>
			</center>	
			</td>
			
		</tr>
		
		</table>
		
		

	";
	}
	$strhtml .="
		<table  width='100%' border='1'>
		<tr>
			<th rowspan='2'>No</th>
			<th rowspan='2' >NISN</th>
			<th rowspan='2'>Nama</th>
			<th  rowspan='2'>L/P</th>
			<th  colspan='8'>Senin</th>
			<th  colspan='8'>Selasa</th>
			<th  colspan='8'>Rabu</th>
			<th  colspan='8'>Kamis</th>
			<th  colspan='8'>Jum'at</th>
			<th  colspan='8'>Sabtu</th>
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
			
			
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			
			
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			
			
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			
			
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			
			
			<th>1</th>
			<th>2</th>
			<th>3</th>
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			
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
			<td><center> $i</center></td>
			<td> $data->nisn</td>
			<td> $data->nama_siswa</td>
			<td><center>$data->jenis_kelamin</center></td>
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
