<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('default/partial/head') ?>
	<title>LoGiN</title>
</head>
<body>
	<div class="container">
		<div class="title-test">Login</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<center>
					<div>
						<form action="<?= base_url('user/login') ?>" method="post" class="form-inline">
					        <div class="form-group">
					            <input type="text" name="username" placeholder="Username" class="form-control" required />
					        </div>
					        <div class="form-group">
					            <input type="password" name="password" placeholder="Password" class="form-control" required />
					        </div>
					        <button type="submit" class="btn btn-success">Login</button>
					    </form>
					</div>
				</center>
			</div>
		</div>
	</div>

	<?php $this->load->view('default/partial/foot') ?>
</body>
</html>