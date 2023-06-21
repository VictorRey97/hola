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
  if (isset($_POST["sala1"])) {
    echo "img src='img/sala1.jpg' style='width: 700px;'";
    echo "Precio";
    echo "$28,000.00";
  }
  if (isset($_POST["sala2"])) {
    echo "Sala de todos";
    echo "Precio";
    echo "$30,000.00";
  }
  ?>
  
</body>
</html>