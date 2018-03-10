	<div class="container-fluid">
	<h1> Are you sure you want to delete this list?</h1>
		<form action="<?=base_url()?>todo/showListByID/<?=$list_data['list_id']?>"><button class="btn btn-primary" type="submit">Back</button></form>
		<form action="<?= base_url() ?>todo/deleteList" method="post">
			<input type="hidden" name="list_id" value="<?=$list_data['list_id']?>">

			<div class="form-group">
				<label>List name: </label>
				<input class="form-control" type="text" name="list_name" placeholder="List name" value="<?= $list_data['list_name'] ?>" disabled required>
			</div>

			<div class="form-group">
				<label>List description: </label>
				<textarea class="form-control" name="list_description" placeholder="List description" disabled required><?= $list_data['list_description']?></textarea>
			</div>
			<button class="btn btn-primary" type="submit">Delete list</button>
		</form>
	</div>
