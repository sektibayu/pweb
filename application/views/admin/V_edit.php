		<!-- <table border="1">
			<tr>
				<th>id_user</th>
				<th>nama</th>
				<th>rule</th>
			</tr>

			<?php foreach ($nama_users as $nama_user)
			{ ?>
				<tr>
					<td> <?php echo $nama_user->id_user ?></td>
					<td> <?php echo $nama_user->nama ?></td>
					<td> <?php echo $nama_user->rule ?></td>
				</tr>
			<?php } ?>
		</table> -->
								
		
					
		
			
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">					 
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Rule</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table User</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th class="text-center" data-sortable="true" >ID User</th>
						        <th class="text-center" data-sortable="true">Nama</th>
						        <th class="text-center"  data-sortable="true">Rule</th>
						        <th class="text-center"  data-sortable="true">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach ($nama_users as $nama_user)
							{ ?>
								<tr>
									<td> <?php echo $nama_user->id_user ?></td>
									<td> <?php echo $nama_user->nama ?></td>
									<td> <?php echo $nama_user->rule ?></td>

									<td>
						    		<a href="<?php echo site_url('C_admin/update2').'/'.$nama_user->id_user?>" class="btn btn-primary btn-xs"title="Sunting"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <?php echo '<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal'.$nama_user->id_user.'"><span class="glyphicon glyphicon-remove"></span></button>'?> 
                                    <!-- Modal -->
                                    <?php echo '<div class="modal fade" id="modal'.$nama_user->id_user.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> '?>
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin menghapus user <?php echo $nama_user->id_user ?>? <br><br><br> klik "Ya" untuk konfirmasi
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <a href="<?php echo site_url('C_admin/delete').'/'.$nama_user->id_user?>">
                                                    <button type="button" class="btn btn-danger">Ya</button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
						    	</td>
								</tr>
							<?php } ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
		
	</div><!--/.main-->
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->