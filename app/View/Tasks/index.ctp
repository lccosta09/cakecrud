<table class="table">
<thead class="thead-dark">
	<tr>
		<th scope="col">Código</th>
		<th scope="col">Título</th>
		<th scope="col">Descrição</th>
		<th scope="col">Criação</th>
		<th scope="col">Ação</th>
	</tr>
</thead>
<tbody>
	<?php foreach ($tasks as $task): ?>
		<tr>
			<th scope="row"><?php echo $task['Task']['id']; ?></th>
			<td><a href="/tasks/view/<?php echo $task['Task']['id'] ?>"><?php echo $task['Task']['title']; ?></a></td>
			<td><?php echo $task['Task']['description']; ?></td>
			<td><?php echo $task['Task']['created_at']; ?></td>
			<td>
				<div class="btn-group" role="group" aria-label="Basic example">
					<a href="/tasks/edit/<?php echo $task['Task']['id']; ?>">
						<button type="button" class="btn btn-warning">Editar</button>
					</a>&nbsp;
					<form action="/tasks/delete/<?php echo $task['Task']['id']; ?>" method="POST">
						<input type="submit" class="btn btn-danger" value="Excluir"/>
					</form>
				</div>
			</td>
		</tr>
	<?php endforeach; ?>
</tbody>
</table>