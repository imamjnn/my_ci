<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('demo/partial/head') ?>
	<title>Formatter</title>
</head>
<body>
	<div class="container">
		<div class="title-test">Formatter</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<p>Format text : <?= $demo->description->chars('2') ?></p>
				<p>Format date : <?= $demo->created->format('d M Y') ?></p>
				<p>Format image : <img src="<?= $demo->photo->_50x ?>"></p>
			</div>
		</div>
	</div>

	<?php $this->load->view('demo/partial/foot') ?>
</body>
</html>