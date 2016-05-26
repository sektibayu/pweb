<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">					 
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Sekolah</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Elements</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action = "<?php echo site_url("C_Siswa/pendaftaran")?>" role="form" method="post">
							
								<div class="form-group">
									<label>Pilih Sekolah</label>
									<select class="form-control">
										print_r ($sekolahs);

										<?php foreach ($sekolahs as $sekolah)
										{ ?>
											
											<option value="<?php echo $sekolah->id_sekolah ?>"><?php echo $sekolah->nama_sekolah ?></option>	
										<?php } ?>
									</select>
								</div>


								
								<button type="submit" class="btn btn-primary">Submit Button</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
		
		
	</div><!--/.main-->
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->