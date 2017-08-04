<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
	<?php $this->load->view('admin/partial/head') ?>
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
				<h1>Article</h1>
                <a href="<?= base_url('admin/article/edit/0') ?>">[Create New]</a>
				<div class="row">
					<div class="col-md-8">
						<ul>
                            <?php if($articles): ?>
                            <?php foreach($articles as $art): ?>
						        <li><?= $art->title ?> <a href="<?= base_url('admin/article/edit/'.$art->id) ?>" class="pull-right">[Edit]</a></li>
                            <?php endforeach; ?>
                            <?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php $this->load->view('admin/partial/foot') ?>
</body>
</html>
