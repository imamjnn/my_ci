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

				
				<?php if(!$this->user): ?>
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
				<?php else: ?>
					<p></p>
					<a href="<?= base_url('demo/crud/edit/0') ?>" class="btn btn-default">Create new</a>
					<a href="<?= base_url('user/logout') ?>" class="btn btn-danger pull-right">Logout</a>
				<?php endif; ?>

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
							<td><img src="<?= $dem->photo->_120x70 ?>"></td>
							<td><?= $dem->created->format('d M Y') ?></td>
							<td>
								<?php if($this->user): ?>
								<a href="<?= base_url('demo/crud/edit/'.$dem->id) ?>">
									<span class="glyphicon glyphicon-pencil"></span>
								</a>
								<a href="<?= base_url('demo/crud/deleteData/'.$dem->id) ?>" onclick="return confirm('Are you sure?')">
									<span class="glyphicon glyphicon-trash"></span>
								</a>
								<?php else: ?>
								<b style="color: red;">Login!</b>
								<?php endif; ?>
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