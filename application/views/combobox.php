<html>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery_combo.js"></script> <!-- ajax-bertingkat -->
<script type='text/javascript'>
			var htmlobjek;
			$(document).ready(function() {
				$("#provinsi").change(function(){
					var kode_provinsi = $("#provinsi").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>combobox/kabupaten/"+kode_provinsi,
						data: "kode_provinsi="+kode_provinsi,
						success: function(data){
							$("#kabupaten").html(data);
						}
					});
				});
			});
			
			$(document).ready(function() {
				$("#kabupaten").change(function(){
					var kode_kabupaten = $("#kabupaten").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>combobox/kecamatan/"+kode_kabupaten,
						data: "kode_kabupaten="+kode_kabupaten,
						success: function(data){
							$("#kecamatan").html(data);
						}
					});
				});
			});
			
			$(document).ready(function() {
				$("#kecamatan").change(function(){
					var kode_kecamatan = $("#kecamatan").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>combobox/desa/"+kode_kecamatan,
						data: "kode_kecamatan="+kode_kecamatan,
						success: function(data){
							$("#desa").html(data);
						}
					});
				});
			});
				</script>
				
				
				
				
	<body>
							<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Provinsi</label>
												<div class="col-sm-10">
												<select id="provinsi"  class="form-control" required="" aria-required="true" required name="agama">
													<option value="">Pilih provinsi</option>
													<?php foreach($provinsi as $data){?>
													<option value="<?php echo $data->id_provinsi?>"><?php echo $data->nama_provinsi?></option>
													<?php }?>
												</select>
												
												</div>
											</div>
							<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kabupaten</label>
												<div class="col-sm-10">
												<select id="kabupaten"  class="form-control" required="" aria-required="true" required name="agama">
													<option value="">Pilih Kabupaten</option>
												
												</select>
												
												</div>
											</div>
							<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kecamatan</label>
												<div class="col-sm-10">
												<select id="kecamatan"  class="form-control" required="" aria-required="true" required name="agama">
													<option value="">Pilih Kecamatan</option>
												
												</select>
												
												</div>
											</div>
							<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Desa</label>
												<div class="col-sm-10">
												<select id="desa"  class="form-control" required="" aria-required="true" required name="agama">
													<option value="">Pilih Desa</option>
												
												</select>
												
												</div>
											</div>
	</body>
</html>