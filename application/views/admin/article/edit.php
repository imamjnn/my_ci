<!DOCTYPE html>
<html>
<head>
	<title>Edit Article</title>
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
				<div class="row">
					<form action="<?= base_url('admin/article/save/'.$id) ?>" method="post">
					<div class="col-md-8">
                        <i style="color: red;" id="mess"></i>
        					<div class="form-group">
        						<label>Title:</label>
        						<input class="form-control" type="text" value="<?= $id ? $article->title :'' ?>" name="title" required>
        					</div>
        					<div class="form-group">
        						<label>Content:</label>
        						<textarea class="form-control tinymce" type="text" name="content"><?= $id ? $article->content :'' ?></textarea>
        					</div>
					</div>
                    <div class="col-md-4">
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
                        <div class="form-group">
                            <label>Category</label>
                            <div class="input-group">
								<select name="category" class="selectpicker" id="cat-art">
								</select>
                            </div>
                        </div>
						<div class="form-group">
                            <label>Status</label>
                            <div class="input-group">
								<select name="status" class="selectpicker">
									<option value="1">Draft</option>
									<option value="2">Publish</option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="<?= base_url('admin/article') ?>" class="btn btn-warning">Cancel</a>
                            <button class="btn btn-success pull-right" type="submit">Save</button>
                        </div>
                    </div>
                    </form>
				</div>
			</div>
		</div>
	</div>


	<?php $this->load->view('admin/partial/foot') ?>
</body>
</html>
