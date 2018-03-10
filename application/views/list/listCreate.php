	<div class="container-fluid">
		<form action="<?=base_url()?>todo/createList" method="post" class="">
			<div class="form-group">
				<label>List name: </label>
				<input class="form-control" type="text" name="list_name" placeholder="List name" required>
			</div>

			<div class="form-group">
				<label>List description: </label>
				<textarea class="form-control" name="list_description" placeholder="List description" required></textarea>
			</div>

			<button class="btn btn-primary" type="submit">Add task</button>
		</form>
	</div>
