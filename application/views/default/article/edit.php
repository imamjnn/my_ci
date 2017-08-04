<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('default/partial/head') ?>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
</head>
<body>
	<div class="container">
		<div class="title-test"><?= $title ?></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<i style="color: red;" id="mess"></i>
				<form action="<?= base_url('article/save/'.$id) ?>" method="post">
					<div class="form-group">
						<label>Title:</label>
						<input class="form-control" type="text" value="<?= $id ? $article->title :'' ?>" name="title">
					</div>
					<div class="form-group">
						<label>Content:</label>
						<textarea class="form-control" type="text" name="content"><?= $id ? $article->content :'' ?></textarea>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Cover?</label>
								<div class="input-group">
									<input id="images" name="userfile" type="file" style="display:none">
									<input type="text" value="<?= $id ? $article->cover :'' ?>" id="preview" name="cover" placeholder="File not selected" class="form-control" readonly>
									<span class="input-group-btn">
										<label for="images" type="button" class="btn btn-default">
											<span class="glyphicon glyphicon-file"></span>
										</label>
									</span>
								</div>
								<img src="<?= $id ? $article->cover :'' ?>" id="imagePreview" width="100%"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Category</label>
								<div class="input-group">
									<select class="selectpicker">
										<option>Oke</option>
										<option>asa</option>
										<option>Oksdse</option>
										<option>Okqwqe</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
					<a href="<?= base_url() ?>" class="btn btn-warning">Cancel</a>
					<button class="btn btn-success pull-right" type="submit">Save</button>
					</div>
				</form>
			</div>
		</div>	
	</div>	

	<?php $this->load->view('default/partial/foot') ?>	
	<script src="<?= $this->theme->asset('vendor/tinymce/tinymce.min.js') ?>"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
	<script src="<?= $this->theme->asset('js/tiny.js') ?>"></script>
	
</body>
</html>