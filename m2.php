<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos del formulario
  $username = $_POST["username"];
  $password = $_POST["password"];
  if ($username === "123" && $password === "123") {

    header("gracias.html");
    exit;
  } else {
    header("Location: error_login.html");
    exit;
  }
}
?>


