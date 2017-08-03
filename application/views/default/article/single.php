<!DOCTYPE html>
<html>
<head>
	<title><?= $article->title ?></title>
	<?php $this->load->view('demo/partial/head') ?>
</head>
<body>
	<div class="col-md-8 col-md-offset-2">
		<div id="container">
			<div id="body">
				<h3><?= $article->title ?></h3>
				<p><?= $article->content ?></p>
				<p><?= $article->created->format('d M Y') ?></p>
			</div>
		</div>
		<center><a href="<?= base_url() ?>">Home</a></center>
	</div>
<?php $this->load->view('demo/partial/foot') ?>
</body>
</html>