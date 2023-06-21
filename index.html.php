
<HTML>
<HEAD>
<TITLE> RH Muebles </TITLE>

<BODY> 
<p>Cantidad de visitas:
<b>
<?php
$fp = fopen("contador-de-visitas.txt", "r+");
$counter = fgets($fp, 7);
echo $counter;
$counter ++;
rewind($fp);
fputs($fp, $counter);
fclose($fp);
?>
</b></p>
<table style="width:100%;" align="left">
<tr BGCOLOR="#DF2CF1">
<th align="left"><h1><FONT COLOR="WHITE" SIZE="7" FACE="Times New Roman">MUEBLERIA ABI</h1></FONT></th></p>
<th><FONT COLOR="WHITE" SIZE="5" FACE="Times New Roman"><a href="catalogo.html" title="Catalogo">Catalogo</th></font>
<th><FONT COLOR="WHITE" SIZE="5" FACE="Times New Roman"><a href="#Colecciones" title="Colecciones"> Colecciones</th></a></font>
<th><FONT COLOR="WHITE" SIZE="5" FACE="Times New Roman"><a href="#Nuevo" title="Nuevo"> Nuevo</th></a></font>
<th><FONT COLOR="WHITE" SIZE="5" FACE="Times New Roman"><a href="comentarios.php" title="Comentarios"> Comentarios</th></a></font>
<th><FONT COLOR="WHITE" SIZE="5" FACE="Times New Roman"><a href="inicio-sesion.html" title="Iniciarsesion"> Iniciar sesion</th></a></font>
</tr>

</table>
<br><br>
<a href="catalogo.html"><img src="img/catalogos.jpg" ALT"CLICK PARA REDIRIGIRA LA PAGINA DE DICO" width="1335" height="450" ALIGN="left" hspace="0" vspace="0"></a>
<hr align="center" color="#DF2CF1" size ="5" width="100%">
<br><br>
<h1 align="center"> Explora nuestros productor mas vendidos </h1><a name="Colecciones"></a><br>
<hr align="center" color="#DF2CF1" size ="5" width="100%">
<br><br>


<a href="salas.html"><img src="img/salas.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="recamaras.html"><img src="img/recamaras.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="cocina.html"><img src="img/Cosinas.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="oficina.html"><img src="img/oficina.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>

<a href="comedor.html"><img src="img/comedores.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="decoraciones.html"><img src="img/decoraciones.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="sillas.html"><img src="img/sillas.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="colchones.html"><img src="img/colchones.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<br>
<hr align="center" color="#DF2CF1" size ="5" width="100%">
<br><br>
<h1 align="center"> Articulos especiales </h1><a name="Nuevo"></a><br>
<hr align="center" color="#DF2CF1" size ="5" width="100%">
<br><br>

<a href="bazar.html"><img src="img/bazar.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="dico.html"><img src="img/dicolife.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="sofanni.html"><img src="img/sofanni.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="premium.html"><img src="img/premium.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>

<a href="pink.html"><img src="img/pink.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="black.html"><img src="img/blackchicago.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<a href="mixymach.html"><img src="img/mixymach.jpg" width="331" height="393" ALIGN="left" hspace="0" vspace="0"></a>
<br>

</BODY>
</HTML>