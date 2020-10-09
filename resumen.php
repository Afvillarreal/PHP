<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Prueba Include y require PHP</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="/example/css/estilo2.css">
 
</head>

<body data-spy="scroll" data-target="#miPrimerScroll" data-offset="1">

	<div class="container-fluid">
		<div class="row">
			<nav class="col-sm-3 col-4" id="miPrimerScroll">
				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<a class="nav-link active" href="#seccion1">Sentencia IF en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion2">Sentencia Switch en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion3">Sentencia While en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion4">Sentencia For en PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#seccion5">Objetos</a>
					</li>
				</ul>
			</nav>
			<div class="col-sm-9 col-8">
				<div id="seccion1" class="bg-secondary">
					<h1>Uso de IF en PHP</h1>
					<p><?php include $_SERVER['DOCUMENT_ROOT'].'/example/php/ifPhp.php'; ?>
				</div>
				<div id="seccion2" class="bg-info">
					<h1>Uso de Switch en PHP</h1>
					<p><?php require $_SERVER['DOCUMENT_ROOT'].'/example/php/switch.php'; ?></p>
				</div>
				<div id="seccion3" class="bg-warning">
					<h1>Uso de While en PHP</h1>
					<p><?php require $_SERVER['DOCUMENT_ROOT'].'/example/php/while.php'; ?></p>
				</div>
				<div id="seccion4" class="bg-success">
					<h1>Uso de for en PHP</h1>
					<p><?php require $_SERVER['DOCUMENT_ROOT'].'/example/php/for.php'; ?></p>
				</div>

				<div id="seccion5" class="bg-success">
					<h1>Objetos</h1>
					<p><?php require $_SERVER['DOCUMENT_ROOT'].'/example/php/objetos.php'; ?></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html> 