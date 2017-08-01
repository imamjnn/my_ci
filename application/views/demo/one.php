<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('demo/partial/head') ?>
	<title>Simple CRUD</title>
</head>
<body>
	<div class="container">
		<div class="title-test">Simple CRUD</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<a href="<?= base_url('demo/crud/edit/0') ?>" class="btn btn-default">Create new</a>
				<p></p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Photo</th>
							<th>Created</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php if($demos): ?>
						<?php foreach($demos as $dem): ?>
						<tr>
							<td><?= $dem->name ?></td>
							<td><?= $dem->description ?></td>
							<td><img src="<?= $dem->photo->_100x ?>"></td>
							<td><?= $dem->created->format('d M Y') ?></td>
							<td>
								<a href="<?= base_url('demo/crud/edit/'.$dem->id) ?>">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
								<a href="<?= base_url('demo/crud/deleteData/'.$dem->id) ?>" onclick="return confirm('Are you sure?')">
									<span class="glyphicon glyphicon-trash"></span>
								</a>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php $this->load->view('demo/partial/foot') ?>
</body>
</html>