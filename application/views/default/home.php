<!DOCTYPE html>
<html>
<head>
	<?= $this->meta->home() ?>
	<?php $this->load->view('demo/partial/head') ?>
</head>
<body>

<div id="container">
	<h1>Welcome to MY CI</h1>

	<div id="body">
		<p>For example:</p>
		<ul>
			<li>
				<a href="<?= base_url('demo/crud') ?>">Ex CRUD</a>
			</li>
			<li>
				<a href="<?= base_url('demo/formatter') ?>">Ex Formatter</a>
			</li>
		</ul>

		<p>My Article: <?php if($this->user): ?>[<a href="<?= base_url('article/edit/0') ?>">Create new</a>]<?php endif; ?></p>
		<ul>
			<?php if($articles): ?>
				<?php foreach($articles as $art): ?>
				<li>
					<a href="<?= $art->page ?>"><?= $art->title ?></a> <?php if($this->user): ?>[<a href="<?= base_url('article/edit/'.$art->id) ?>">Edit</a>]<?php endif; ?>
				</li>
				<?php endforeach; ?>
			<?php endif; ?>
		</ul>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. [<?= $this->user ? '<a href="'.base_url('user/logout').'">Logout</a>' : '<a href="'.base_url('login').'">Login</a>' ?>]</p>
</div>
<?php $this->load->view('demo/partial/foot') ?>
</body>
</html>