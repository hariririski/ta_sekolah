<?php

			$this->load->library("PHPExcel");
 
            //membuat objek
            $objPHPExcel = new PHPExcel();
 
			//
			$baris=1;
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A1', 'DAFTAR GURU SMA SEULIMEUM 1 ACEH BESAR');
			
			
            //Sheet yang akan diolah
			$baris=3;
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$baris, 'NO')
						->setCellValue('B'.$baris, 'NIP')
						->setCellValue('C'.$baris, 'NUPTK')
						->setCellValue('D'.$baris, 'Nama')
						->setCellValue('E'.$baris, 'Tanggal Lahir')
						->setCellValue('F'.$baris, 'Tempat Lahir')
						->setCellValue('G'.$baris, 'Jenis Kelamin')
						->setCellValue('H'.$baris, 'Agama')
						->setCellValue('I'.$baris, 'NO HP')
						->setCellValue('J'.$baris, 'Email')
						->setCellValue('K'.$baris, 'Jenjang Pendidikan')
						->setCellValue('L'.$baris, 'Prodi')
						->setCellValue('M'.$baris, 'Mata Pelajaran')
						->setCellValue('N'.$baris, 'Status Kepegawaian')
						->setCellValue('O'.$baris, 'Jenis PTK')
						->setCellValue('P'.$baris, 'Provinsi')
						->setCellValue('Q'.$baris, 'Kabupaten')
						->setCellValue('R'.$baris, 'Kecamatan')
						->setCellValue('S'.$baris, 'Desa')
						->setCellValue('T'.$baris, 'Jalan');
			$i=4;
			$NO=1;
			foreach($data_guru as $data){
            $objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$i, $NO )
						->setCellValue('B'.$i, $data->nip )
						->setCellValue('C'.$i, $data->nuptk)
						->setCellValue('D'.$i, "".$data->gelar_depan."".$data->nama_guru."".$data->gelar_belakang."")
						->setCellValue('E'.$i, $data->tanggal_lahir)
						->setCellValue('F'.$i, $data->jenis_kelamin)
						->setCellValue('G'.$i, $data->tempat_lahir)
						->setCellValue('H'.$i, $data->nama_agama)
						->setCellValue('I'.$i, $data->no_hp)
						->setCellValue('J'.$i, $data->email)
						->setCellValue('K'.$i, $data->nama_jenjang_pendidikan)
						->setCellValue('L'.$i, $data->prodi)
						->setCellValue('M'.$i, $data->nama_mata_pelajaran)
						->setCellValue('N'.$i, $data->nama_status_kepegawaian)
						->setCellValue('O'.$i, $data->nama_jenis_ptk)
						->setCellValue('P'.$i, $data->provinsi)
						->setCellValue('Q'.$i, $data->kabupaten)
						->setCellValue('R'.$i, $data->kecamatan)
						->setCellValue('S'.$i, $data->desa)
						->setCellValue('T'.$i, $data->jalan);
			$i++;
			$NO++;
			}

			
			$objPHPExcel->getSheet(0)->getColumnDimension('A')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('B')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('C')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('D')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('E')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('F')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('G')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('H')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('I')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('J')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('K')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('L')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('M')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('N')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('O')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('P')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('Q')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('R')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('S')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('T')->setAutoSize(true);
			
			//merge cell
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:T1');
			
			
			
			//center
			$style = array(
				'alignment' => array(
					'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				)
			);

			$objPHPExcel->getActiveSheet()->getStyle('A3:T3')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle('A1:T1')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle("A1:T1")->getFont()->setSize(20);
			$objPHPExcel->getActiveSheet()->getStyle("A3:T3")->getFont()->setSize(14);
			unset($style);
			
			// warna kepala table
			$odd_row_style = array(
				'fill' => array(
					'type' => PHPExcel_Style_Fill::FILL_SOLID,
					'color' => array('rgb' => 'CCCCCC')
				),
				'borders' => array(
					'allborders' => array(
						'style' => PHPExcel_Style_Border::BORDER_THIN,
						'color' => array('rgb' => 'AAAAAA')
					)
				)
			);

			// Later on

			$objPHPExcel->getActiveSheet()->getStyle('A3:T3')->applyFromArray($odd_row_style);
			unset($odd_row_style);
			
			
			//table
			$styleArray = array(
			  'borders' => array(
				'allborders' => array(
				  'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			  )
			);
			--$i;
			$objPHPExcel->getActiveSheet()->getStyle('A3:T'.$i.'')->applyFromArray($styleArray);
			unset($styleArray);
			
            //Set Title
            $objPHPExcel->getActiveSheet()->setTitle('Excel Pertama');
		
            //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	
            //Header
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

            //Nama File
            header('Content-Disposition: attachment;filename="Data_guru.xlsx"');

            //Download
            $objWriter->save("php://output");


?>