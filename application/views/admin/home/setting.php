<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/partial/head') ?>
	<title>Setting</title>
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
				<h1>Setting</h1>
				<div class="row">
					<div class="col-md-8">
						<table class="table">
							<tbody>
								<?php if($sparams): ?>
								<?php foreach($sparams as $param): ?>
								<tr>
									<td><b><?= $param->name ?></b></td>
									<td>
										<?= $param->value ?>
									</td>
									<td><a href="" class="show-param-edit" data-toggle="modal" data-target="#setModal" data-id="<?= $param->id ?>">[Edit]</a></td>
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
	<div class="modal fade" id="setModal" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div id="param-content"></div>
			</div>
		</div>
	</div>
	<?php $this->load->view('admin/partial/foot') ?>
	<script>
		$('.show-param-edit').click(function() {
			var Id = $(this).attr('data-id');

			$.ajax({
				url: '<?= base_url('admin/adm_home/edit/') ?>' + Id,
				cache: false,
				beforeSend: function() {
					$("#param-content").html("Please wait....");
				},
				success: function(result) {
					$("#param-content").html(result);

				}
			});
		});
	</script>
</body>

</html>
