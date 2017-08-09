<!DOCTYPE html>
<html>
<head>
	<title>Edit Article</title>
	<?php $this->load->view('admin/partial/head') ?>
	<link rel="stylesheet" type="text/css" href="<?= $this->theme->asset('admin/css/tokenize2.css') ?>">
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
								<select name="category" class="selectpicker">
									<option value="">--Category--</option>
									<?php if($category): ?>
									<?php foreach($category as $cat): ?>
									<option value="<?= $cat->id ?>" <?= ($cat->id == $article->category ? 'selected':'') ?>><?= $cat->name ?></option>
									<?php endforeach; ?>
									<?php endif; ?>
								</select>
                            </div>
						</div>
						<div class="form-group">
							<label>Tag:</label>
			                <select name="tag[]" class="tokenize-callable-demo1" multiple>
			                	<?php if($tags): ?>
								<?php foreach($tags as $tag): ?>
								<option value="<?= $tag->id ?>" <?= in_array($tag->id, $tag_in) ? 'selected' : '' ?>><?= $tag->name ?></option>
								<?php endforeach; ?>
								<?php endif; ?>
			                </select>
			            </div>
                        <!--<div class="form-group">
                            <label>Tag</label>
                            <div class="input-group">
								<select name="tag[]" class="selectpicker" multiple id="tag-art">
								</select>
                            </div>
                        </div>-->
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
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?= $this->theme->asset('admin/js/tokenize2.js') ?>"></script>
	<script>
		$('.tokenize-callable-demo1').tokenize2({
			sortable: true,
			placeholder: 'Choose tag..',
            dataSource: function(search, object){
                $.ajax('http://myci.dev/api/filter/tagarticle', {
                    data: { name: search },
                    dataType: 'json',
                    success: function(data){
                        var $items = [];
                        data = data.data;
                        $.each(data, function(k, v){
                            $items.push(v);
                        });
                        object.trigger('tokenize:dropdown:fill', [$items]);
                    }
                });
            }
        });
	</script>
</body>
</html>
