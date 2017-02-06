 <html>
            <head>
			<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/bootstrap.css?1422792965" />
		<!-- END STYLESHEETS -->
            <script type="text/javascript">
            function loadFrame()
            {
            var s=document.getElementById("platform").value;

            document.getElementById("loadContainer").innerHTML=""
            var iframe = document.createElement("iframe");
            iframe.src = s;
			iframe.width="100%";
			iframe.height="400px"
			iframe.scrolling="no";
			iframe.frameBorder = 0;
            document.getElementById("loadContainer").appendChild(iframe);
            }
            </script>
            </head>
            <body>

            <div style="float:left">
            <form>
               Tahun Ajaran
                <select id='platform' class="form-control"   onchange="loadFrame()">
				<?php 
				 foreach($data_tahun_ajaran as $data){
				?>
                    <option value="Redirect_controller/hasil_grafik/<?php echo $data->tahun_ajaran?>?TH=<?php echo $data->tahun_ajaran?>"> <?php echo $data->tahun_ajaran?></option>
                 
				 <?php }?>
                </select>
            </form>
            </div>

            <div id="loadContainer" width="100%" height="600px">
			<?php 
			$i=1;
				 foreach($data_tahun_ajaran as $data){
					 
				?>
			<iframe src="Redirect_controller/hasil_grafik/<?php echo $data->tahun_ajaran?>?TH=<?php echo $data->tahun_ajaran?>" width="100%" height="400px" scrolling="no" frameborder="0"></iframe>
			<?php $i++;
			exit;}?>
			</div>
            </body>
            </html> 