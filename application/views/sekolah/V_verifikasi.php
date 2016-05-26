	<br>
	<div class="col-sm-10 col-sm-offset-3 col-lg-10 col-lg-offset-3 main">
		<div class="row">
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">Verifikasi Table</div>
					<div class="panel-body">
						<table data-toggle="table" >
						    <thead>
						    <tr>
						        <th>ID User</th>
						        <th>Nama</th>
						        <th>Alamat</th>
						        <th>Bahasa Indonesia</th>
						        <th>IPA</th>
						        <th>Matematika</th>
						        <th>Verifikasi</th>
						    </tr>
						    </thead>
						    <tbody>
						    <tr>
						    	<?php foreach ($siswas as $siswa)
							{ ?>
						    	<tr>
									<td> <?php echo $siswa->id_user ?></td>
									<td> <?php echo $siswa->nama ?></td>
									<td> <?php echo $siswa->alamat ?></td>
									<td> <?php echo $siswa->indonesia ?></td>
									<td> <?php echo $siswa->ipa ?></td>
									<td> <?php echo $siswa->matematika ?></td>
									<td> </td>
								</tr>
						    	<?php } ?>
						    </tr>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>