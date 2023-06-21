<html>
    <head>
        <title>Inicia sesion</title>
        <style>
            button{
width: auto;
height: 35px;
background-color: #0d2881;
color: white;
border: solid;
border-width: 4px; 
cursor: pointer; }
        </style>
    </head>
    <body bgcolor="#DF2CF1">
        <br>
        <br>
        <br>
        <br>
        <p align="center" style="font-size: 60px; margin-top: 0; margin-bottom: 10;"> 
        <h1 align = "center">
<?php
if(isset($_FILES['archivo'])){
    $nomarchivo=$_FILES['archivo']['name'];
    $ruta=$_FILES['archivo']['tmp_name'];
    $rutades='C:\xampp\htdocs\braulio\Muebleria\img'.$nomarchivo;
    if(move_uploaded_file($ruta, $rutades)){
    echo "Imagen subida correctamente. <br><br>";
    echo '<img src="_'.$nomarchivo.'" width="100" heigth="100">';
    } else{
    echo "Error al subir la imagen"; }
    }
$usuario_predeterminado = 'tania';
$contrasena_predeterminada = '1234';


$usuario_ingresado = $_POST['usuario'];
$contrasena_ingresada = $_POST['contrasena'];


if ($usuario_ingresado === $usuario_predeterminado && $contrasena_ingresada === $contrasena_predeterminada) {
    echo 'El usuario y la contraseña son correctos. :)';
} else {
    echo 'El usuario y la contraseña son incorrectos :(';
}
    
?>
<p align="center">
<button onclick="location.href='index.html.php'" style="background-color: red; color: white; border: solid;  border-width: 4px; cursor: pointer; width: 200px; height: 50px;" ><b>REGRESAR</b></button>
</p>
</body>
</html>