<h1>Editar tarefa</h1>
<hr>
<form action="/tasks/add" method="POST">
	<div class="form-group">
		<label for="data[Task][title]">Título</label>
		<input type="text" class="form-control" id="taskTitle" name="data[Task][title]" value="<?php echo isset($this->request->data['Task']['title']) ? $this->request->data['Task']['title'] : '' ?>">
	</div>
	<div class="form-group">
		<label for="data[Task][description]">Descrição</label>
		<input type="text" class="form-control" id="taskDescription" name="data[Task][description]" value="<?php echo isset($this->request->data['Task']['description']) ? $this->request->data['Task']['description'] : '' ?>">
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>