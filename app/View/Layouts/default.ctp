<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Crud Cake</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">

		<!-- Custom styles for this template -->
		<link href="/css/starter-template.css" rel="stylesheet">
	</head>
	<body>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="/tasks">Tarefas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		      	<span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/tasks/add">Adicionar tarefa</a>
					</li>
				</ul>
		    </div>
		</nav>

		<main role="main" class="container">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</main>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="/js/jquery-slim.min.js"><\/script>')</script>
		<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>


