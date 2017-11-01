<?php

include("Clases/ClaseModelo.php");
include("Clases/CarritoCompras.php");

$objetoModelo=new ClaseModelo();
$objetoCarrito=new CarritoCompras();

?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	</head>

	<body>

		<?php $objetoModelo->mostrarBuscador();?>
		<div id="sector" class="sector">
			<?php $objetoModelo->mostrarDatos();?>
			<br>
			<form method="post" action="Pagina.php">
				<?php
					session_start();
					$objetoCarrito->mostrarProductos("Pagina.php");
					$objetoCarrito->añadirCompras();
					echo '<br>';
				?>
			</form>

			<form action="Pagina.php" method="post">
					<?php $objetoCarrito->mostrarCarrito("Pagina.php"); ?>
					<?php $objetoCarrito->descontarCarrito("Pagina.php");?>

			</form>

			<div id="carro" >

				<?php $objetoCarrito->borrarCarrito("Pagina.php"); ?>
			</div>
		</div>

	</body>
	<!--
	<script type="text/javascript">
   		var autoLoad = setInterval(refrescar, 1000);
		var filas;
			function refrescar(){
					clearInterval(autoLoad);
					autoLoad=null;
					$('#sector').load('Pagina.php');
					setTimeout(autoLoad,10000);
			}
	</script>
	-->


 <script type="text/javascript">
	$("#icarro").on('click',function () {
		alert(getAttribute("href"));
 	});

</script>

</html>
