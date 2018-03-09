	<div class="container-fluid">
		<form action="<?=base_url()?>todo/showListByID/<?=$task_data['list_id']?>"><button class="btn btn-primary" type="submit">Back</button></form>
		<form action="<?= base_url() ?>todo/updateTask/<?=$task_data['task_id'] ?>" method="post">
			<input type="hidden" name="task_id" value="<?=$task_data['task_id']?>">
			<input type="hidden" name="list_id" value="<?=$task_data['list_id']?>">

			<div class="form-group">
				<label>Task name: </label>
				<input class="form-control" type="text" name="task_name" placeholder="Task name" value="<?= $task_data['task_name'] ?>" required>
			</div>

			<div class="form-group">
				<label>Task description: </label>
				<textarea class="form-control" name="task_description" placeholder="Task description" required><?= $task_data['task_description']?></textarea>
			</div>

			<div class="form-group">
				<label>Task duration: </label>
				<input class="form-control" type="text" name="task_duration" placeholder="HH:mm" value="<?= $task_data['task_duration'] ?>" required>
			</div>

			<div class="form-group">
				<label>Task status: </label>
				<select class="form-control" name="task_status" required>
					<option <?php if($task_data['task_status'] == "Completed") echo "selected" ?> value="Completed">Completed</option>
					<option <?php if($task_data['task_status'] == "In Progress") echo "selected" ?> value="In Progress">In Progress</option>
					<option <?php if($task_data['task_status'] == "Concept") echo "selected" ?> value="Concept">Concept</option>
				</select>
			</div>
			
			<button class="btn btn-primary" type="submit">Edit task</button>
		</form>
	</div>
