<!DOCTYPE html>
<html>
<head>
	<?= $page ?>
	<?php $this->load->view('demo/partial/head') ?>
</head>
<body>
	<div class="container">
		<div class="title-test"><?= $title ?></div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<i style="color: red;" id="mess"></i>
				<form action="<?= base_url('demo/crud/saveData/'.$id) ?>" method="post">
					<div class="form-group">
						<label>Name:</label>
						<input class="form-control" type="text" value="<?= $id ? $demo->name :'' ?>" name="name">
					</div>
					<div class="form-group">
						<label>Description:</label>
						<input class="form-control" type="text" value="<?= $id ? $demo->description :'' ?>" name="description">
					</div>
					<div class="form-group">
						<label>Photo</label>
						<div class="input-group">
							<input id="images" name="userfile" type="file" style="display:none">
							<input type="text" value="<?= $id ? $demo->photo :'' ?>" id="preview" name="photo" placeholder="File not selected" class="form-control" readonly>
							<span class="input-group-btn">
								<label for="images" type="button" class="btn btn-default">
									<span class="glyphicon glyphicon-file"></span>
								</label>
							</span>
						</div>
						<img src="<?= $id ? $demo->photo :'' ?>" id="imagePreview" width="100%"/>
					</div>
					<a href="<?= base_url('demo/crud') ?>" class="btn btn-warning">Cancel</a>
					<button class="btn btn-success pull-right" type="submit">Save</button>
				</form>
			</div>
		</div>	
	</div>	

	<?php $this->load->view('demo/partial/foot') ?>	
	
</body>
</html>