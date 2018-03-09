	<div class="container-fluid">
		<form action="<?=base_url()?>todo/showListByID/<?=$list_id?>"><button class="btn btn-primary" type="submit">Back</button></form>
		<form action="<?=base_url()?>todo/createTask" method="post" class="">
			<input type="hidden" name="list_id" value="<?=$list_id?>">

			<div class="form-group">
				<label>Task name: </label>
				<input class="form-control" type="text" name="task_name" placeholder="Task name" required>
			</div>

			<div class="form-group">
				<label>Task description: </label>
				<textarea class="form-control" name="task_description" placeholder="Task description" required></textarea>
			</div>

			<div class="form-group">
				<label>Task duration: </label>
				<input class="form-control" type="text" name="task_duration" placeholder="HH:mm" required>
			</div>

			<div class="form-group">
				<label>Task status: </label>
				<select class="form-control" name="task_status" required>
					<option value="Completed">Completed</option>
					<option value="In Progress">In Progress</option>
					<option value="Concept" selected>Concept</option>
				</select>
			</div>
			
			<button class="btn btn-primary" type="submit">Add task</button>
		</form>
	</div>
