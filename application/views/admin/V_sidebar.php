<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<br><br>
		<ul class="nav menu">
			<li><a href="<?php echo site_url('C_admin/edit') ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Edit Hak (Role) User</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Jadwal 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo site_url('C_admin/jadwal_pendaftaran') ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Jadwal Pendaftaran
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url('C_admin/jadwal_pengumuman') ?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Jadwal Pengumuman
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->