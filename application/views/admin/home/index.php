<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('admin/partial/head') ?>
	<title>Bootstrap Flat 101 Template</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-lg-2">
				<nav class="navbar navbar-default navbar-fixed-side">
					<!-- normal collapsible navbar markup -->
					<?php $this->load->view('admin/partial/sidemenu') ?>
				</nav>
			</div>
			<div class="col-sm-9 col-lg-10">
				<h1>Welcome</h1>
				<div class="row">
					<div class="col-md-8">
						Here content!
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('admin/partial/foot') ?>
</body>
</html>
