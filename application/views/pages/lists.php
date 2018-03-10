<div class="container-fluid">
	<div class="row">
		<?php 
			foreach($lists as $list) {
		?>
			<div class="col-md-3 text-center">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="<?=base_url()?>todo/showListByID/<?=$list['list_id']?>"><h1><?= $list['list_name'] ?></h1></a>
					</div>
					<div class="panel-body">
						<p><?= $list['list_description'] ?></p>
					</div>
				</div>
			</div>
		<?php
			}
		?>
	</div>
</div>
