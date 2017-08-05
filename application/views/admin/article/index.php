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
							<input type="text" name="title" class="form-control" placeholder="Find articles">
						</div>
						<div class="form-group">
							<div class="input-group">
								<select name="category" class="selectpicker" id="cat-art">
								</select>
                            </div>
						</div>
						<div class="form-group">
							<div class="input-group">
                                <select name="status" class="selectpicker" data-live-search="true">
									<option value="1">Draft</option>
									<option value="2">Publish</option>
                                </select>
                            </div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary pull-right">Filter</button>
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
										<a href="<?= base_url('admin/article/edit/'.$art->id) ?>" class="btn btn-xs btn-default pull-right"><span class="glyphicon glyphicon-pencil"></span></a>
										<p><?= base_url($art->page) ?></p>
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
	<script>
		$('#cat-art').selectpicker({
			liveSearch: true
		})
		.ajaxSelectPicker({
	        ajax: {
	            url: 'http://myci.dev/api/filter/catarticle',
	            data: function () {
					var el = this.plugin.$element;
	                var params = {
	                    name: '{{{q}}}'
	                };

	                return params;
	            },
				method: 'get'
	        },
	        locale: {
	            emptyTitle: 'Search for category...'
	        },
	        preprocessData: function(data){
				if(data.error)
                    return [];

				data = data.data;
                var result = [];
                for(var i=0; i<data.length; i++){
                    result.push({
                        value: data[i].id,
                        text: data[i].name,
                        disabled: false
                    });
                }

                return result;
	        }
	    });
	</script>
</body>
</html>
