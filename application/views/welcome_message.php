<!DOCTYPE html>
<html>
<head>
	<?= $this->meta->home() ?>
	<?php $this->load->view('demo/partial/head') ?>
</head>
<body>

<div id="container">
	<h1>Welcome to MY CodeIgniter!</h1>

	<div id="body">
		<p>This is framework codeigniter custom, by JNN.</p>
		<ul>
			<li>
				<a href="<?= base_url('demo/crud') ?>">Ex CRUD</a>
			</li>
			<li>
				<a href="<?= base_url('demo/formatter') ?>">Ex Formatter</a>
			</li>
		</ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>