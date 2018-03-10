	<div class="container-fluid">
		<form action="<?=base_url()?>todo/showListByID/<?=$list_data['list_id']?>"><button class="btn btn-primary" type="submit">Back</button></form>
		<form action="<?= base_url() ?>todo/updateList" method="post">
			<input type="hidden" name="list_id" value="<?=$list_data['list_id']?>">

			<div class="form-group">
				<label>List name: </label>
				<input class="form-control" type="text" name="list_name" placeholder="List name" value="<?= $list_data['list_name'] ?>" required>
			</div>

			<div class="form-group">
				<label>List description: </label>
				<textarea class="form-control" name="list_description" placeholder="List description" required><?= $list_data['list_description']?></textarea>
			</div>
			<button class="btn btn-primary" type="submit">Edit list</button>
		</form>
	</div>
