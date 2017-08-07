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
				<div class="page-header">
					<a href="<?= base_url('admin/article/edit/0') ?>" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Create New</a>
					<h1>Articles</h1>

				</div>

				<div class="row">
					<div class="col-md-4">
						<form method="get">
						<div class="form-group">
							<input type="text" name="title" class="form-control" placeholder="Find articles" value="<?= $this->input->get('title') ?>">
						</div>
						<div class="form-group">
							<div class="input-group">
								<select name="category" class="selectpicker">
									<option value="">--Category--</option>
									<?php if($category): ?>
									<?php foreach($category as $cat): ?>
									<option value="<?= $cat->id ?>"><?= $cat->name ?></option>
									<?php endforeach; ?>
									<?php endif; ?>
								</select>
                            </div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<select name="tag" class="selectpicker" id="tag-art">
								</select>
                            </div>
						</div>
						<div class="form-group pull-right">
							<a href="<?= base_url('admin/article') ?>" class="btn btn-default">Reset</a>
							<button class="btn btn-primary">Filter</button>
						</div>
						</form>
					</div>
					<div class="col-md-8">
						<table class="table table-hover table-striped">
							<tbody>
								<?php if($articles): ?>
								<?php foreach($articles as $art): ?>
								<tr>
									<td>
										<b><?= $art->title ?></b>
										<div class="pull-right">
											<a href="<?= base_url('admin/article/edit/'.$art->id) ?>" class="btn btn-xs btn-default pull-right"><span class="glyphicon glyphicon-pencil"></span></a>
											<?php if($art->status == 1): ?>
											<span class="label label-warning">draft</span>
											<?php else: ?>
											<a href="<?= base_url($art->page) ?>" target="_blank" class="btn btn-xs btn-default pull-right"><span class="glyphicon glyphicon-new-window"></span></a>
											<?php endif; ?>
										</div>

										<p><?= base_url($art->page) ?></p>
									</td>
								</tr>
								<?php endforeach; ?>
								<?php endif; ?>
							</tbody>
						</table>
						<div class="pull-right">
							<?= $this->pagination->create_links() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php $this->load->view('admin/partial/foot') ?>
</body>
</html>
