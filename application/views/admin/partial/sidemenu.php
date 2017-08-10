<div class="navbar-header">
	<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
	<a class="navbar-brand"><?= $this->param->item('Site Name') ?></a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
		<li>
			<a href="#"><span class="glyphicon glyphicon-home"></span> Dasboard</a>
		</li>
		<li class="dropdown">
			<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Article <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li>
					<a href="<?= base_url('admin/article') ?>">All Article</a>
				</li>
				<li>
					<a href="<?= base_url('admin/article/category') ?>">Categories</a>
				</li>
				<li>
					<a href="#">Tags</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="<?= base_url('admin/setting') ?>"><span class="glyphicon glyphicon-cog"></span> Setting</a>
		</li>
	</ul>
</div>
