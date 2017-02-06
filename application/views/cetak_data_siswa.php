<?php

			$this->load->library("PHPExcel");
 
            //membuat objek
            $objPHPExcel = new PHPExcel();
 
			//
			$baris=1;
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A1', 'DAFTAR SISWA SMA SEULIMEUM 1 ACEH BESAR');
			
			
            //Sheet yang akan diolah
			$baris=3;
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$baris, 'NO')
						->setCellValue('B'.$baris, 'NISN')
						->setCellValue('C'.$baris, 'NIK')
						->setCellValue('D'.$baris, 'NIPD')
						->setCellValue('E'.$baris, 'Nama')
						->setCellValue('F'.$baris, 'Jenis Kelamin')
						->setCellValue('G'.$baris, 'Agama')
						->setCellValue('H'.$baris, 'Tanggal Lahir')
						->setCellValue('I'.$baris, 'Tempat Lahir')
						->setCellValue('J'.$baris, 'NO Seri Ijazah')
						->setCellValue('K'.$baris, 'SKHUN')
						->setCellValue('L'.$baris, 'NO Registrasi Akta Kelahiran')
						->setCellValue('M'.$baris, 'Jumlah Saudara Kandung')
						->setCellValue('N'.$baris, 'Jenis Tinggal')
						->setCellValue('O'.$baris, 'No HP')
						->setCellValue('P'.$baris, 'Email')
						
						->setCellValue('Q'.$baris, 'Provinsi')
						->setCellValue('R'.$baris, 'Kabupaten')
						->setCellValue('S'.$baris, 'Kecamatan')
						->setCellValue('T'.$baris, 'Desa')
						->setCellValue('U'.$baris, 'Jalan')
						->setCellValue('V'.$baris, 'Kode Pos')
						->setCellValue('W'.$baris, 'Alat Transportasi')
						
						
						->setCellValue('X'.$baris, 'Layak PIP')
						->setCellValue('Y'.$baris, 'Alasan Menerima PIP')
						
						->setCellValue('Z'.$baris, 'NO KIP')
						->setCellValue('AA'.$baris, 'Penerima KIP')
						->setCellValue('AB'.$baris, 'Nama Di KIP')
						
						->setCellValue('AC'.$baris, 'Penerima KPS')
						->setCellValue('AD'.$baris, 'NO KPS')
						
						->setCellValue('AE'.$baris, 'NO KKS')
						->setCellValue('AF'.$baris, 'NO PUN')
						->setCellValue('AG'.$baris, 'Rombel Saat Ini')
						
					
						->setCellValue('AH'.$baris, 'Bank')
						->setCellValue('AI'.$baris, 'Nama Rekening')
						->setCellValue('AJ'.$baris, 'No Rekening')
												
						->setCellValue('AK'.$baris, 'Nama Ayah')
						->setCellValue('AL'.$baris, 'Tahun Lahir Ayah')
						->setCellValue('AM'.$baris, 'Penghasilan Ayah')
						->setCellValue('AN'.$baris, 'Pekerjaan Ayah')
						->setCellValue('AO'.$baris, 'Jenjang Pendidikan Ayah')
						
						->setCellValue('AP'.$baris, 'Nama Ibu')
						->setCellValue('AQ'.$baris, 'Tahun Lahir Ibu')
						->setCellValue('AR'.$baris, 'Penghasilan Ibu')
						->setCellValue('AS'.$baris, 'Pekerjaan Ibu')
						->setCellValue('AT'.$baris, 'Jenjang Pendidikan Ibu')
						
						->setCellValue('AU'.$baris, 'Nama Wali')
						->setCellValue('AV'.$baris, 'Tahun Lahir Wali')
						->setCellValue('AW'.$baris, 'Penghasilan Wali')
						->setCellValue('AX'.$baris, 'Pekerjaan Wali')
						->setCellValue('AY'.$baris, 'Jenjang Pendidikan Wali')
						;
			$i=4;
			$NO=1;
			
			foreach($data_siswa as $data){
            $objPHPExcel->setActiveSheetIndex(0)
						->setCellValue('A'.$i, $NO)
						->setCellValue('B'.$i, $data->nisn)
						->setCellValue('C'.$i, $data->nik_siswa)
						->setCellValue('D'.$i, $data->nipd)
						->setCellValue('E'.$i, $data->nama_siswa)
						->setCellValue('F'.$i, $data->jenis_kelamin)
						->setCellValue('G'.$i, $data->nama_agama)
						->setCellValue('H'.$i, $data->tanggal_lahir)
						->setCellValue('I'.$i, $data->tempat_lahir)
						->setCellValue('J'.$i, $data->no_seri_ijazah)
						->setCellValue('K'.$i, $data->skhun)
						->setCellValue('L'.$i, $data->no_registrasi_akte_kelahiran)
						->setCellValue('M'.$i, $data->jumlah_saudara_kandung)
						->setCellValue('N'.$i, $data->jenis_tinggal)
						->setCellValue('O'.$i, $data->no_hp)
						->setCellValue('P'.$i, $data->email)
						
						->setCellValue('Q'.$i, $data->provinsi)
						->setCellValue('R'.$i, $data->kabupaten)
						->setCellValue('S'.$i, $data->kecamatan)
						->setCellValue('T'.$i, $data->desa)
						->setCellValue('U'.$i, $data->jalan)
						->setCellValue('V'.$i, $data->kode_pos)
						->setCellValue('W'.$i, $data->alat_transportasi)
						
						
						->setCellValue('X'.$i, $data->layak_pip)
						->setCellValue('Y'.$i, $data->alasan_layak_pip)
						
						->setCellValue('Z'.$i, $data->no_kip)
						->setCellValue('AA'.$i, $data->penerima_kip)
						->setCellValue('AB'.$i, $data->nama_di_kip)
						
						->setCellValue('AC'.$i, $data->penerima_kps)
						->setCellValue('AD'.$i, $data->no_kps)
						
						->setCellValue('AE'.$i, $data->no_kks)
						->setCellValue('AF'.$i, $data->no_pun)
						->setCellValue('AG'.$i, $data->rombel_saat_ini)
						
					
						->setCellValue('AH'.$i, $data->bank)
						->setCellValue('AI'.$i, $data->rekening_atas_nama)
						->setCellValue('AJ'.$i, $data->no_rekening_bank)
												
						->setCellValue('AK'.$i, $data->nama_ayah)
						->setCellValue('AL'.$i, $data->tahun_lahir_ayah)
						->setCellValue('AM'.$i, $data->penghasilan_ayah)
						->setCellValue('AN'.$i, $data->pekerjaan_ayah)
						->setCellValue('AO'.$i, $data->nama_jenjang_pendidikan_ayah)
						
						->setCellValue('AP'.$i, $data->nama_ibu)
						->setCellValue('AQ'.$i, $data->tahun_lahir_ibu)
						->setCellValue('AR'.$i, $data->penghasilan_ibu)
						->setCellValue('AS'.$i, $data->pekerjaan_ibu)
						->setCellValue('AT'.$i, $data->nama_jenjang_pendidikan_ibu)
						
						->setCellValue('AU'.$i, $data->nama_wali)
						->setCellValue('AV'.$i, $data->tahun_lahir_wali)
						->setCellValue('AW'.$i, $data->penghasilan_wali)
						->setCellValue('AX'.$i, $data->pekerjaan_wali)
						->setCellValue('AY'.$i, $data->nama_jenjang_pendidikan_wali)
						;
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
			$objPHPExcel->getSheet(0)->getColumnDimension('U')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('V')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('W')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('X')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('Y')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('Z')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AA')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AB')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AC')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AD')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AE')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AF')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AG')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AH')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AI')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AJ')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AK')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AL')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AM')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AN')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AO')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AP')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AQ')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AR')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AS')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AT')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AU')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AV')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AW')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AX')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AY')->setAutoSize(true);
			$objPHPExcel->getSheet(0)->getColumnDimension('AZ')->setAutoSize(true);
			
			//merge cell
			$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:AY1');
			
			
			
			//center
			$style = array(
				'alignment' => array(
					'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				)
			);

			$objPHPExcel->getActiveSheet()->getStyle('A3:T3')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle('A1:AZ3')->applyFromArray($style);
			$objPHPExcel->getActiveSheet()->getStyle("A1:T1")->getFont()->setSize(20);
			$objPHPExcel->getActiveSheet()->getStyle("A1:AZ3")->getFont()->setSize(14);
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

			$objPHPExcel->getActiveSheet()->getStyle('A3:AY3')->applyFromArray($odd_row_style);
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
			$objPHPExcel->getActiveSheet()->getStyle('A3:AY'.$i.'')->applyFromArray($styleArray);
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
            header('Content-Disposition: attachment;filename="Data_siswa.xlsx"');

            //Download
            $objWriter->save("php://output");


?>