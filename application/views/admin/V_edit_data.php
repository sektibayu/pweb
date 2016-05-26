


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">					 
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit role</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Table User</div>
					<div class="panel-body">
						<form role="form" action="<?php echo site_url('C_admin/update').'/'.$user->id_user ?>" method="post">
           
				<div class="form-group">
					<label>ID User</label>
					<input class="form-control" placeholder="id_user" name="id_user" type="text" value="<?php echo $user->id_user ?>" disabled></input>
				</div>
				<div class="form-group">
					<label>role</label>
					<input class="form-control" placeholder="Role" name="role" type="text" value="<?php echo $user->role ?>" required></input>
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>	
					</div>
				</div>
			</div>
		</div><!--/.row-->		