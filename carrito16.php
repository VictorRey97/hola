<html>
<head>
  <title>Procesando Formulario de Envío</title>
</head>
<body>
<table style="width:100%;" align="left">
		<tr BGCOLOR="#DF2CF1">
			<th align="left"><h1><FONT COLOR="WHITE" SIZE="7" FACE="Times New Roman"><a href="index.html.php" title="Catalogo">MUEBLERIA ABI</h1></a></FONT></th></p>
		<th><FONT COLOR="WHITE" SIZE="5" FACE="Times New Roman"><a href="catalogo.html" title="Catalogo">Catalogo</th></font>
		<th><FONT COLOR="WHITE" SIZE="5" FACE="Times New Roman"><a href="Formulario.html" title="Formulario"> Comentarios</th></a></font>
		<th><FONT COLOR="WHITE" SIZE="5" FACE="Times New Roman"><a href="inicio-sesion.html" title="Iniciarsesion"> Iniciar sesion</th></a></font>

</table>
  <?php
  // Verificar si se ha enviado el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $estado = $_POST["estado"];
    $codigoPostal = $_POST["codigo_postal"];
    
    // Realizar validaciones necesarias
    
    // Procesar los datos (guardar en la base de datos, enviar un correo electrónico, etc.)
    
    // Mostrar un mensaje de éxito
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Dirección: $direccion</p>";
    echo "<p>Ciudad: $ciudad</p>";
    echo "<p>Estado: $estado</p>";
    echo "<p>Código Postal: $codigoPostal</p>";
  }
  ?>
  <table>

  <tr>
<td><img src="img/cocina4.jpg" style="width: 700px;"></td>
<td><p><h1><FONT COLOR="BLACK" SIZE="6" FACE="Times New Roman">Cocina Sicilia Choco 1.80 Mts</h1></FONT>
	<br><br>
	
	<FONT COLOR="BLACK" SIZE="5" FACE="Times New Roman">

	Precio<br>
	$4,049.10
	<br><br>
	Incluye: Modulo con 3 puertas, alacena y portacampana (estufa, refrigerador, campana y horno son solo ilustrativos)
    
  <br><br>
	<form action="gracias.html" method="post">
		<input type="submit"  name="gracias" value="Comprar">
		</form>
	<br><br><br><br>
	</font></td></p>
</tr>
  </table>
  

</body>
</html>