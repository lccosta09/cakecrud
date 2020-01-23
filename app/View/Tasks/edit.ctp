<h1>Editar tarefa</h1>
<hr>
<form action="/tasks/edit/<?php echo $this->data['Task']['id']; ?>" method="POST">
	<input type="hidden" name="data[Task][id]" value="<?php echo $this->data['Task']['id'] ?>" id="TaskId">
	<div class="form-group">
		<label for="data[Task][title]">Título</label>
		<input type="text" value="<?php echo $this->data['Task']['title'] ?>" class="form-control" id="taskTitle"  name="data[Task][title]" >
	</div>
	<div class="form-group">
		<label for="data[Task][description]">Descrição</label>
		<input type="text" value="<?php echo $this->data['Task']['description'] ?>" class="form-control" id="taskDescription" name="data[Task][description]" >
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>