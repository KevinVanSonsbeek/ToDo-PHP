	<div class="container-fluid">
		<div>
			<h1><?= $list_info['list_name'] ?></h1>
			<p><?= $list_info['list_description']?></p>
			<form action="<?=base_url()?>todo/showCreateTask/<?= $list_info['list_id'] ?>"><button class="btn btn-primary" type="submit">Add task</button></form>
		</div>
		<br>
		<div>
			<table class="table table-striped table-bordered">
				<tr>
					<th>Task name</th>
					<th>Task description</th>
					<th>Task duration</th>
					<th>Task status</th>
					<th colspan="2">Action</th>
				</tr>
				<?php 
					foreach($list_tasks as $task) {
				?>
				<tr>
					<td><?= $task['task_name'] ?></td>
					<td><?= $task['task_description'] ?></td>
					<td><?= $task['task_duration'] ?></td>
					<td><?= $task['task_status'] ?></td>
					<td><a href="<?= base_url() ?>todo/showUpdateTask/<?= $task['task_id'] ?>" >Edit</a> </td>
					<td><a href="<?= base_url() ?>todo/showDeleteTask/<?= $task['task_id'] ?>">Delete</a></td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>

