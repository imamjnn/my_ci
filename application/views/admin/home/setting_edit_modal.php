<div class="modal-header">
    <button class="close" data-dismiss="modal" type="button">&times;</button>
    <h4 class="modal-title">
        <?= $param->name ?>
    </h4>
</div>
<form action="<?= base_url('admin/home/saveEdit') ?>" method="post">
	<div class="modal-body">
        <div class="form-group">
            <input type="hidden" name="id" value="<?= $param->id ?>">
            <input type="text" class="form-control" name="value" value="<?= $param->value ?>" required="true">
        </div>
	</div>
	<div class="modal-footer text-center">
	    <button type="submit" class="btn btn-info btn-round">Save</button>
	</div>
</form>