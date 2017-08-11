<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
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
					
					<h1><?= $title ?></h1>

				</div>

				<div class="row">
					<div class="col-md-4">
						<form action="<?= base_url('admin/article/category/save/'.$id) ?>" method="post">
							<div class="form-group">
								<label>Name:</label>
								<input type="text" name="name" class="form-control" placeholder="Name" value="<?= $id ? $cat_edit->name :'' ?>">
							</div>
							<div class="form-group">
								<label>Parent:</label>
								<div class="input-group">
									<select name="parent" class="selectpicker" title="Parent">
										<?php if($categories): ?>
										<?php foreach($categories as $cat): ?>
										<option value="<?= $cat->id ?>" <?= $id ? ($cat->id != $cat_edit->parent ? '':'selected') : '' ?>><?= $cat->name ?></option>
										<?php endforeach; ?>
										<?php endif; ?>
									</select>
	                            </div>
							</div>
							<div class="form-group">
								<label>Description:</label>
								<textarea name="description" class="form-control" rows="5"><?= $id ? $cat_edit->description :'' ?></textarea>
							</div>
							<div class="form-group pull-right">
								<?php if($id): ?>
								<a href="<?= base_url('admin/article/category/0') ?>" class="btn btn-default">Cancel</a>
								<?php endif; ?>
								<button class="btn btn-primary"><?= $btn_title ?></button>
							</div>
						</form>
					</div>
					<div class="col-md-8">
						<table class="table table-hover table-striped">
							<tbody>
								<?php if($categories): ?>
								<?php foreach($categories as $cat): ?>
								<tr>
									<td>
										<b><?= $cat->name ?></b>
										<div class="pull-right">
											<a href="<?= base_url('admin/article/category/'.$cat->id) ?>" class="btn btn-xs btn-default pull-right"><span class="glyphicon glyphicon-pencil"></span></a>
											
											<a href="<?= base_url($cat->page) ?>" target="_blank" class="btn btn-xs btn-default pull-right"><span class="glyphicon glyphicon-new-window"></span></a>
										</div>

										<p><?= base_url($cat->page) ?></p>
									</td>
								</tr>
								<?php endforeach; ?>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php $this->load->view('admin/partial/foot') ?>
</body>
</html>
