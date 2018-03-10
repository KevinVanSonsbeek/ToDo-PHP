	<div class="container-fluid">
		<div>
			<div class="input-group">
								
				<h1  style="display: inline;"><?= $list_info['list_name'] ?> </h1>
				<span><a href="<?=base_url()?>todo/showUpdateList/<?=$list_info['list_id']?>">edit <i class="fa fa-edit"></i></a></span>
				<span><a href="<?=base_url()?>todo/showDeleteList/<?=$list_info['list_id']?>" style="color: red;"> delete <i class="fa fa-trash-alt"></i></a></span>
			</div>
			<p><?= $list_info['list_description']?></p>
			<form action="<?=base_url()?>todo/showCreateTask/<?= $list_info['list_id'] ?>"><button class="btn btn-success" type="submit"><i class="fa fa-plus"></i> Add task</button></form>
		</div>
		<br>
		<div>	
			<input class="form-control text-right" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for task status or duration">
			<br>
			<table class="table table-striped table-bordered" id="tasksTable">
				<tr>
					<th>Task name</th>
					<th>Task description</th>
					<th>Task duration</th>
					<th  onclick="sortTable(3)" style="cursor: pointer;">Task status <i class="fa fa-arrows-alt-v"></i></th>
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
					<td class="text-right"><a href="<?= base_url() ?>todo/showUpdateTask/<?= $task['task_id'] ?>" >Edit <i class="fa fa-edit"></i></a> </td>
					<td class="text-right"><a href="<?= base_url() ?>todo/showDeleteTask/<?= $task['task_id'] ?>" style="color: red;">Delete <i class="fa fa-trash-alt"></i></a></td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>

