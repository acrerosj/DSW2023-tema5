<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level']!=="administrator") {
  $_SESSION['message'] = "Se necesitan permisos de administrador";
  header('Location: index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Página 1 de Administrador</h1>
</body>
</html>