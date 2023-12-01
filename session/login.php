<?php
session_start();
if (isset($_GET['action']) && $_GET['action']=="clear-visits") {
  $_SESSION['visits'] = [];
}

if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
  $_SESSION['visits'][] = date("Y-m-d H:i:s"); 
} else {
  if (isset($_GET['name'])) {
    $_SESSION['user'] = $_GET['name'];
    $_SESSION['visits'][] = date("Y-m-d H:i:s"); 
    $user = $_GET['name'];
  } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
<?php
  if (isset($user)) {
    echo "<h1>Hola $user</h1>";
    foreach($_SESSION['visits'] as $date) {
      echo $date . '<br>';
    }
  } else {
?>
  <h2>Bienvendio, ¿cómo te llamas?</h2>
  <form action="login.php">
    <p>
      <input type="text" name="name" id="">
      <input type="submit" value="enviar">
    </p>
  </form>
<?php
  }
?>
<p>
  <a href="login.php">Actualizar la página</a>
</p>
<p>
  <a href="logout.php">Cerrar sesión</a>
</p>
<p>
  <a href="login.php?action=clear-visits">Eliminar visitas</a>
</p>
</body>
</html>