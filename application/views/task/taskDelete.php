	<div class="container-fluid">
		<h1> Are you sure you want to delete this task?</h1>
		<form action="<?=base_url()?>todo/showListByID/<?=$task_data['list_id']?>"><button class="btn btn-primary" type="submit">Back</button></form>
		<form action="<?= base_url() ?>todo/deleteTask/<?=$task_data['task_id'] ?>" method="post">
			<input type="hidden" name="task_id" value="<?=$task_data['task_id']?>">
			<input type="hidden" name="list_id" value="<?=$task_data['list_id']?>">

			<div class="form-group">
				<label>Task name: </label>
				<input class="form-control" type="text" name="task_name" placeholder="Task name" value="<?= $task_data['task_name'] ?>" required disabled>
			</div>

			<div class="form-group">
				<label>Task description: </label>
				<textarea class="form-control" name="task_description" placeholder="Task description" required disabled><?= $task_data['task_description']?></textarea>
			</div>

			<div class="form-group">
				<label>Task duration: </label>
				<input class="form-control" type="text" name="task_duration" placeholder="HH:mm" value="<?= $task_data['task_duration'] ?>" required disabled>
			</div>

			<div class="form-group">
				<label>Task status: </label>
				<select class="form-control" name="task_status" required disabled>
					<option <?php if($task_data['task_status'] == "Completed") echo "selected" ?> value="Completed">Completed</option>
					<option <?php if($task_data['task_status'] == "In Progress") echo "selected" ?> value="In Progress">In Progress</option>
					<option <?php if($task_data['task_status'] == "Concept") echo "selected" ?> value="Concept">Concept</option>
				</select>
			</div>
			<h1>From list:</h1>
			<h3><?= $list_data['list_name']?></h3>
			<p><?= $list_data['list_description']?></p>
			
			<button class="btn btn-primary" type="submit">Delete task</button>
		</form>
	</div>
